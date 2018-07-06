@extends('master')

@section('content')

<div class="row">
<div class="col-md-12">
<br/>
<h3 align="center">Service Data</h3>
<br/>
@if($message=Session::get('success'))
<div class="alert alert-suceess">
<p>{{$message}}</p>
</div>
@endif	
<div align="right">
<a href="{{route('carservice.create')}}" class="btn btn-primary">Add</a>
<br/>
<br/>
</div>
	<table class="table table-bordered">
	<tr>
	<th>Service Code</th>
	<th>Service Name</th>
	<th>Price</th>
	<th>Edit</th>
	<th>Delete</th>
	</tr>
	
	@foreach($carservice as $row)
	<tr>
	<td>{{$row['scode']}}</td>
	<td>{{$row['sname']}}</td>
	<td>{{$row['price']}}</td>
	<td><a href="{{action('CarServiceController@edit',$row['id'])}}" class="btn btn-warning">Edit</a></td>
	<td>
	<form method="post" class="delete_form" action="{{action('CarServiceController@destroy',$row['id'])}}">
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
