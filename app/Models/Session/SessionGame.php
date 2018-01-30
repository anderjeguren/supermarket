<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SessionGame extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['session_id', 'playground_id', 'gamemode_id'];
}
