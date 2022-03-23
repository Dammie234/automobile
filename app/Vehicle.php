<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    protected $fillable = [
        'user_id', 'vehicle_type', 'brand', 'make', 'usage', 'name', 'slug', 'year', 'millage', 'colour', 'transmission', 'fuel_type', 'engine_number', 'number_of_gear', 'drive_type', 'body_style', 'number_of_door', 'horse_type', 'location', 'description', 'video_url', 'approved', 'featured', 'price', 'featured_image'
    ];
}
