<?php

/**
 * Reservation repositories as a part of the repository pattern
 * Use platform specific models to interact with the database
 * Use domain models to interact with the business logic
 */

namespace Soap\Jongman\Laravel\Repositories;

use Soap\Jongman\Domain\Common\Time;
use Soap\Jongman\Domain\Schedule;
use Soap\Jongman\Enums\PeriodTypeEnum;
use Soap\Jongman\Interfaces\LayoutFactoryInterface;
use Soap\Jongman\Interfaces\ScheduleRepositoryInterface;
use Soap\Jongman\Laravel\Models\Schedule as ScheduleModel;
use Soap\Jongman\Laravel\Models\ScheduleLayout as ScheduleLayoutModel;

class ScheduleRepository implements ScheduleRepositoryInterface
{
    public function getAll()
    {
        $rows = ScheduleModel::all();
        $schedules = [];

        foreach ($rows as $row) {
            $schedules[] = Schedule::fromModel($row);
        }

        return $schedules;
    }

    public function loadById($scheduleId)
    {
        $row = ScheduleModel::find($scheduleId);

        return Schedule::fromModel($row);
    }

    public function getLayout($scheduleId, LayoutFactoryInterface $layoutFactory)
    {
        $layoutObj = ScheduleLayoutModel::with('timeBlocks')
            ->where('id', ScheduleModel::where('id', $scheduleId)->value('schedule_layout_id'))
            ->first();

        /** @var ScheduleLayout $layout */
        $layout = null;

        foreach ($layoutObj->timeBlocks as $timeBlock) {
            if ($layout === null) {
                $layout = $layoutFactory->createLayout();
            }
            $timezone = $layoutObj->timezone;
            $start = Time::parse($timeBlock->start_time, $timezone);
            $end = Time::parse($timeBlock->end_time, $timezone);
            $label = $timeBlock->label;
            $periodType = $timeBlock->availability_code;
            $dayOfWeek = $timeBlock->day_of_week;

            if ($periodType === PeriodTypeEnum::RESERVABLE) {
                $layout->appendPeriod($start, $end, $label, $dayOfWeek);
            } else {
                $layout->appendBlockedPeriod($start, $end, $label, $dayOfWeek);
            }
        }

        return $layout;
    }
}
