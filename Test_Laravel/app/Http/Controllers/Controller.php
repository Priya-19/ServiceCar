<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
	
	function getData()
	{
		$data['data']=DB::table('car')->get();
		
		if(count($data)>0)
		{
			return view('viewCar',$data);
		}
		else
		{
			
			return view('viewCar');
		}
      }
}
