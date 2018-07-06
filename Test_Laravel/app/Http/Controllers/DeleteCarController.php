<?php

namespace App\Http\Controllers;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;

use DB;

class DeleteCarController extends Controller
{
    //
	function getData()
	{
		$data=DB::table('car')->get();
		
		if(count($data)>0)
		{
			return view('addCar',['data'=>$data]);
		}
		else
		{
			
			return view('addCar');
		}
      }
	
	function deleted($id)
	{
		DB::table('car')->where('id',$id)->delete();
		echo"Delete record successfully";
		return view('deleteCar.deleted')->with('id', $id);
	}
	
}
