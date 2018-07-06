@extends('master')

@section('content')
<div class="row">
<div class="col-md-12">
<br/>
<h3 align="center">Add Service</h3>
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


<form method="post" action="{{url('carservice')}}" >
	{{csrf_field()}}

	<div class="form-group">
	<input type="text" name="scode" class="form-control" placeholder="Enter Service Code">
	</div>
	<div class="form-group">
	<input type="text" name="sname" class="form-control" placeholder="Enter Service Name">
	</div>
	<div class="form-group">
	<input type="text" name="price" class="form-control" placeholder="Enter Price">
	</div>
	<div class="form-group">
	<input type="submit" class="btn btn-primary"/>
	</div>
</form>
</div>
</div>
@endsection