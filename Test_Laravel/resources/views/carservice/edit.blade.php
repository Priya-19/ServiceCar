@extends('master')

@section('content')

<div class="row">
<div class="col-md-12">
<br/>
<h3 align="center">Edit Service</h3>
<br/>
@if(count($errors)>0)
	
<div class="alert alert-danger">
<ul>
@foreach($errors->all() as $error)
<li>{{$error}}</li>

@endforeach
</ul>
@endif

<form method="post" action="{{action('CarServiceController@update',$id)}}">
	{{csrf_field()}}
	<input type="hidden" name="_method" value="PATCH"/>
	<div class="form-group">
	
	<input type="text" name="scode" class="form-control" value="{{$carservice->scode}}" placeholder="Enter Service Code"/>
	<input type="text" name="sname" class="form-control" value="{{$carservice->sname}}" placeholder="Enter Service Name"/>
	<input type="text" name="price" class="form-control" value="{{$carservice->price}}" placeholder="Enter Price"/>
	</div>
	<div class="form-group">
	<input type="submit" class="btn btn-primary" value="Edit"/>
	</div>
	</form>
	</div>
	<div>
@endsection