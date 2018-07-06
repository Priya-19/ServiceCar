<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
		$services=Services::all()->toArray();
		return view('services.index',compact('services'));
		
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
		return view('services.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
		'car_number'=>'required',
		'owner_name'=>'required',
		'car_model'=>'required',
		'mobile'=>'required',
		'email'=>'required'
		]);
		$services=new Services([
		'car_number'=>$request->get('car_number'),
		'owner_name'=>$request->get('owner_name'),
		'car_model'=>$request->get('car_model'),
		'mobile'=>$request->get('mobile'),
		'email'=>$request->get('email')
		]);
		$services->save();
		return redirect()->route('services.create')->with('success','Data Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $services=Services::find($id);
		return view('services.edit',compact('services','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
		'car_number'=>'required',
		'owner_name'=>'required',
		'car_model'=>'required',
		'mobile'=>'required',
		'email'=>'required'
		]);
		$services=Services::find($id);
		$services->car_number=$request->get('car_number');
		$services->owner_name=$request->get('owner_name');
		$services->car_model=$request->get('car_model');
		$services->mobile=$request->get('mobile');
		$services->email=$request->get('email');
		$services->save();
		return redirect()->route('services.index')->with('success','Data Updated');
		
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $services=Services::find($id);
		$services->delete();
		return redirect()->route('services.index')->with('success','Data Deleted');
		
    }
}
