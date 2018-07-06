<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Invoice;
class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $invoice=Invoice::all()->toArray();
		return view('invoice.index',compact('invoice'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('invoice.create');
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
		'invoice_number'=>'required',
		'service_code'=>'required',
		'car_number'=>'required',
		'mobile'=>'required',
		'price'=>'required'
		]);
		$invoice=new invoice([
		'invoice_number'=>$request->get('invoice_number'),
		'service_code'=>$request->get('service_code'),
		'car_number'=>$request->get('car_number'),
		'mobile'=>$request->get('mobile'),
		'price'=>$request->get('price')
		]);
		$invoice->save();
		return redirect()->route('invoice.create')->with('success','Data Added');
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
         $invoice=Invoice::find($id);
		return view('invoice.edit',compact('invoice','id'));
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
		'invoice_number'=>'required',
		'service_code'=>'required',
		'car_number'=>'required',
		'mobile'=>'required',
		'price'=>'required'
		]);
		$invoice=Invoice::find($id);
		$invoice->invoice_number=$request->get('invoice_number');
		$invoice->service_code=$request->get('service_code');
		$invoice->car_number=$request->get('car_number');
		$invoice->mobile=$request->get('mobile');
		$invoice->price=$request->get('price');
		$invoice->save();
		return redirect()->route('invoice.index')->with('success','Data Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $invoice=invoice::find($id);
		$invoice->delete();
		return redirect()->route('invoice.index')->with('success','Data Deleted');
    }
}
