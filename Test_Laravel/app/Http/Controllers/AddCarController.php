<?php

namespace App\Http\Controllers;


use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use DB;

class AddCarController extends Controller
{
	use AuthorizesRequests,DispatchesJobs,ValidatesRequests;
	function insert(Request $req)
	{
		$car_name=$req->input('car_name');
		$owner_name=$req->input('owner_name');
		$car_model=$req->input('car_model');
		$mobile=$req->input('mobile');
		$email=$req->input('email');
		
		$data=array('car_name'=>$car_name,'owner_name'=>$owner_name,'car_model'=>$car_model,'mobile'=>$mobile,'email'=>$email);
		DB::table('car')->insert($data);
		echo "Data inserted Successfully";
	}
	
}
