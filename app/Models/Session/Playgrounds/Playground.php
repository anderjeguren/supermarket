<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Playground extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['admin_id', 'environment_id', 'scenery_id'];
}
