<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductDetail extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['description', 'price_euro', 'discount', 'height', 'width', 'depth', 'capacity', 'supplier_id', 'nutritional_values', 'ingredients'];
}
