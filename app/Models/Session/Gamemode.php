<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gamemode extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'duration_sec', 'budget_euro', 'min_products', 'max_products'];
}
