@extends('master')

@section('content')

<div class="row">
<div class="col-md-12">
<br/>
<h3 align="center">Edit Records</h3>
<br/>
@if(count($errors)>0)
	
<div class="alert alert-danger">
<ul>
@foreach($errors->all() as $error)
<li>{{$error}}</li>

@endforeach
</ul>
@endif

<form method="post" action="{{action('CarController@update',$id)}}">
	{{csrf_field()}}
	<input type="hidden" name="_method" value="PATCH"/>
	<div class="form-group">
	<input type="text" name="car_number" class="form-control" value="{{$services->car_number}}" placeholder="Enter Car Number"/>
	<input type="text" name="owner_name" class="form-control" value="{{$services->owner_name}}" placeholder="Enter Owner Name"/>
	<input type="text" name="car_model" class="form-control" value="{{$services->car_model}}" placeholder="Enter Car Model"/>
	<input type="text" name="mobile" class="form-control" value="{{$services->mobile}}" placeholder="Enter Mobile"/>
	<input type="text" name="email" class="form-control" value="{{$services->email}}" placeholder="Enter Email"/>
	</div>
	<div class="form-group">
	<input type="submit" class="btn btn-primary" value="Edit"/>
	</div>
	</form>
	</div>
	<div>
	



@endsection