<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShelveProduct extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['shelve_id', 'product_id', 'position'];
}
