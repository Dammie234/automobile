<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $fillable = ['name', 'counts'];

    public function make()
    {
        return $this->hasMany(Make::class, 'brand_id');
    }
}
