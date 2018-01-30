<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['session_id', 'product_id', 'quantity'];
}
