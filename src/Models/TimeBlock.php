<?php

namespace Soap\Jongman\Laravel\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TimeBlock extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        $this->guarded[] = $this->primaryKey;
        $this->table = config('jongman.table_names.time_blocks') ?: parent::getTable();
    }

    public function scheduleLayout()
    {
        return $this->belongsTo(ScheduleLayout::class);
    }
}
