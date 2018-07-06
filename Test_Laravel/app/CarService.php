<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CarService extends Model
{
	protected $table = 'carservice';
    protected $fillable=['scode','sname','price'];
}
