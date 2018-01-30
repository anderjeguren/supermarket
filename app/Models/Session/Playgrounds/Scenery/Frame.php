<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Frame extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['scenery_id', 'frametype_id', 'height', 'width', 'depth'];
}
