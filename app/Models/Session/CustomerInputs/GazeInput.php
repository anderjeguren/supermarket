<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GazeInput extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['customerinput_id', 'gazetime_ms'];
}
