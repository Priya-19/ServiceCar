<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
	protected $table = 'invoice';
    protected $fillable=['invoice_number','service_code','car_number','mobile','price'];
}
