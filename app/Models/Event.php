<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use App\Models\Workshop;

class Event extends Model
{
    protected $table = 'events';

    public function workshop()
    {
        return $this->hasMany(Workshop::class);
    }

}
