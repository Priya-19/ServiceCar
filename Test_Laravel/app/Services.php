<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    protected $fillable=['car_number','owner_name','car_model','mobile','email'];
}
