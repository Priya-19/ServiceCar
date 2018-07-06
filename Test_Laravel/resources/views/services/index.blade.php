@extends('master')

@section('content')

<div class="row">
<div class="col-md-12">
<br/>
<h3 align="center">Car Data</h3>
<br/>
@if($message=Session::get('success'))
<div class="alert alert-suceess">
<p>{{$message}}</p>
</div>
@endif	
<div align="right">
<a href="{{route('services.create')}}" class="btn btn-primary">Add</a>
<br/>
<br/>
</div>
	<table class="table table-bordered">
	<tr>
	<th>Car Number</th>
	<th>Owner Name</th>
	<th>Car Model</th>
	<th>Mobile</th>
	<th>Email</th>
	<th>Edit</th>
	<th>Delete</th>
	</tr>
	
	@foreach($services as $row)
	<tr>
	<td>{{$row['car_number']}}</td>
	<td>{{$row['owner_name']}}</td>
	<td>{{$row['car_model']}}</td>
	<td>{{$row['mobile']}}</td>
	<td>{{$row['email']}}</td>
	<td><a href="{{action('CarController@edit',$row['id'])}}" class="btn btn-warning">Edit</a></td>
	<td>
	<form method="post" class="delete_form" action="{{action('CarController@destroy',$row['id'])}}">
		{{csrf_field()}}
		<input type="hidden" name="_method" value="DELETE"/>
		<button type="submit" class="btn btn-danger">Delete</button>
		</form>
	
	</td>

	</tr>
	@endforeach
	</table>
</div>
</div>

<script>
$(document).ready(function(){
	$('.delete_form').on('submit',function(){
		if(confirm("Are you sure you want to delete it?"))
		{
			return true;
		}
		else
		{
			return false;
		}
	});
});
</script>
@endsection
