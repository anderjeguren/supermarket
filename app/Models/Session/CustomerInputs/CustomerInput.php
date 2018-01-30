<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CustomerInput extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['session_id', 'shelveproduct_id', 'purchased', 'detailsopened'];
}
