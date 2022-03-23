<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Biodata extends Model
{
    protected $fillable = ['user_id', 'gender', 'nin_number', 'address', 'phone'];

    
}
