<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ControllerInput extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['customerdinput_id', 'grabbedtime_sec'];
}
