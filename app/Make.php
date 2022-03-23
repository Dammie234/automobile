<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Make extends Model
{
    protected $fillable = ['brand_id', 'model', 'counts'];

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }
}
