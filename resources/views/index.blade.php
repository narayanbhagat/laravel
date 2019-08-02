<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>LaravelDemo</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- Style --> 
    <style type="text/css">
    	.custom-space{
    		height: 50px;
    	}
    </style>

</head>
<body>
  
<div class="container">
	


   <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel Demo</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ url('/user/create') }}"> Create New User</a>
            </div>
        </div>
    </div>
</div>
  
<div class="custom-space"></div>

   @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

  <div class="container">
  	<div class="row">
  		<div class="col-md-12">
  			<table class="table table-bordered">
  				<thead>
  					<tr>
  						<th>Id</th>
  						<th>Name</th>
  						<th>Email</th>
  						<th>Action</th>
  					</tr>
  				</thead>
  				<tbody>
  					@php $i=1 @endphp

  					@foreach($all_data as $data)
  					<tr>
  						<td>{{ $i++ }}</td>
  						<td>{{ $data->name }}</td>
  						<td>{{ $data->email }}</td>
  						<td>
  							<a href="{{  route('show',$data->id) }}" class="btn btn-info">Show</a>
  							<a href="{{  route('edit',$data->id) }}" class="btn btn-primary">Update</a>
  							<a href="{{ route('delete',$data->id) }}" class="btn btn-danger">Delete</a>
  						</td>
  					</tr>
  					@endforeach
  				</tbody>
  			</table>
  		</div>
  	</div>
  </div>
</body>
</html>