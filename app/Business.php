<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    protected $fillable = ['user_id', 'company_name', 'address',  'office_phone', 'type_of_business', 'rc_number'];
}
