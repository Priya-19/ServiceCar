@extends('master')

@section('content')
<div class="row">
<div class="col-md-12">
<br/>
<h3 align="center">Add Invoice</h3>
<br/>
@if(count($errors)>0)
	<div class="alert alert-danger">
	<ul>
@foreach($errors->all() as $error)
<li>{{$error}}</li>
@endforeach
</ul>
</div>
@endif
@if(\Session::has('success'))
	<div class="alert alert-success">
	<p>{{\Session::get('success')}}</p>
<div>
@endif


<form method="post" action="{{url('invoice')}}" >
	{{csrf_field()}}
	<div class="form-group">
	<input type="text" name="invoice_number" class="form-control" placeholder="Enter Invoice Number">
	</div>
	<div class="form-group">
	<input type="text" name="service_code" class="form-control" placeholder="Enter Service Code">
	</div>
	<div class="form-group">
	<input type="text" name="car_number" class="form-control" placeholder="Enter Car Number">
	</div>
	<div class="form-group">
	<input type="text" name="mobile" class="form-control" placeholder="Enter Mobile">
	</div>
	<div class="form-group">
	<input type="text" name="price" class="form-control" placeholder="Enter Total Amount">
	</div>
	<div class="form-group">
	<input type="submit" class="btn btn-primary"/>
	</div>
</form>
</div>
</div>
@endsection