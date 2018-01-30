<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shelve extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['block_id', 'height', 'width', 'depth'];
}
