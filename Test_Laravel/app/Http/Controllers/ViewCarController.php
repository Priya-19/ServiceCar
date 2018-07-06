<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewCarController extends Controller
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
}
