<?php

// config for Soap/Jongman
return [
    'table_names' => [
        'time_blocks' => 'time_blocks',
        'schedule_layouts' => 'schedule_layouts',
        'schedules' => 'schedules',
        'resources' => 'resources',
        'resource_types' => 'resource_types',
        'reservation_series' => 'reservation_series',
        'reservation_instances' => 'reservation_instances',
        'blackout_series' => 'blackout_series',
        'reservation_resources' => 'reservation_resources',
        'blackout_series' => 'blackout_series',
        'blackout_instances' => 'blackout_instances',
    ],
    'models' => [
        'time_block' => \Soap\Jongman\Laravel\Models\TimeBlock::class,
        'schedule_layout' => \Soap\Jongman\Laravel\Models\ScheduleLayout::class,
        'schedule' => \Soap\Jongman\Laravel\Models\Schedule::class,
        'resource' => \Soap\Jongman\Laravel\Models\Resource::class,
        'resource_type' => \Soap\Jongman\Laravel\Models\ResourceType::class,
        'reservation_series' => \Soap\Jongman\Laravel\Models\ReservationSeries::class,
        'reservation_instance' => \Soap\Jongman\Laravel\Models\ReservationInstance::class,
        'blackout_series' => \Soap\Jongman\Laravel\Models\BlackoutSeries::class,
        'reservation_resource' => \Soap\Jongman\Laravel\Models\ReservationResource::class,
        'blackout_instance' => \Soap\Jongman\Laravel\Models\BlackoutInstance::class,
    ],
];
