
<!DOCTYPE html>
<html>
<head>
	<title></title>
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
			<div class="col-md-12">
				<div class="col-md-2"></div>
				<div class="col-md-8 ">

					<form action="{{ url('/user/update/{id}') }}" method="post">

						{{ csrf_field() }}
						  <!-- {{ method_field('PATCH') }} -->

						<div class="form-group">
							<input type="text" name="id" value="{{ $all_data->id }}" disabled="" class="form-control">
						</div>
						<div class="form-group">
							<input type="text" name="name" value="{{ $all_data->name }}" class="form-control">
						</div>
						<div class="form-group">
						<input type="text" name="email" value="{{ $all_data->email }}" class="form-control">
						</div>
						<input type="submit" name="update" class="btn btn-success" value="update">&nbsp;&nbsp;<a href="{{ route('index') }}" class="btn btn-warning">Back</a>
					</form>

					
					
				</div>
				<div class="col-md-2"></div>
			</div>
		</div>
	</div>


	
	


</body>
</html>