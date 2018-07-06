@extends('master')

@section('content')

<div class="row">
<div class="col-md-12">
<br/>
<h3 align="center">Edit Invoice</h3>
<br/>
@if(count($errors)>0)
	
<div class="alert alert-danger">
<ul>
@foreach($errors->all() as $error)
<li>{{$error}}</li>

@endforeach
</ul>
@endif

<form method="post" action="{{action('InvoiceController@update',$id)}}">
	{{csrf_field()}}
	<input type="hidden" name="_method" value="PATCH"/>
	<div class="form-group">
	<input type="text" name="invoice_number" class="form-control" value="{{$invoice->invoice_number}}" placeholder="Enter Invoice Number"/>
	<input type="text" name="service_code" class="form-control" value="{{$invoice->service_code}}" placeholder="Enter Service Code"/>
	<input type="text" name="car_number" class="form-control" value="{{$invoice->car_number}}" placeholder="Enter Car Number"/>
	<input type="text" name="mobile" class="form-control" value="{{$invoice->mobile}}" placeholder="Enter Mobile"/>
	<input type="text" name="price" class="form-control" value="{{$invoice->price}}" placeholder="Enter Total Amount"/>
	</div>
	<div class="form-group">
	<input type="submit" class="btn btn-primary" value="Edit"/>
	</div>
	</form>
	</div>
	<div>
	



@endsection