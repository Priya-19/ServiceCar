<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CarService;

class CarServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
		$carservice=CarService::all()->toArray();
		return view('carservice.index',compact('carservice'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('carservice.create');
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
		'scode'=>'required',
		'sname'=>'required',
		'price'=>'required'
		]);
		$carservice=new CarService([
		'scode'=>$request->get('scode'),
		'sname'=>$request->get('sname'),
		'price'=>$request->get('price')
		]);
		$carservice->save();
		return redirect()->route('carservice.create')->with('success','Data Added');
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
        //
		 $carservice=CarService::find($id);
		return view('carservice.edit',compact('carservice','id'));
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
		'scode'=>'required',
		'sname'=>'required',
		'price'=>'required'
		]);
		$carservice=CarService::find($id);
		$carservice->scode=$request->get('scode');
		$carservice->sname=$request->get('sname');
		$carservice->price=$request->get('price');
		$carservice->save();
		return redirect()->route('carservice.index')->with('success','Data Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $carservice=CarService::find($id);
		$carservice->delete();
		return redirect()->route('carservice.index')->with('success','Data Deleted');
    }
}
