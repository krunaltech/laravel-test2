<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use App\Models\Workshop;

class Event extends Model
{
    protected $table = 'events';

    public function eventWithWorkshops()
    {
        return $this->morphOne(Workshop::class, 'event_id')->oldestOfMany();
    }

}
