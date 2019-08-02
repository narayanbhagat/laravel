
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
					<div class="panel panel-body">
						<p>User Id :{{ $all_data->id }}</p>
						<br>
						<p>Name :{{ $all_data->name }}</p>
						<br>
						<p>Email: {{ $all_data->email }}</p>
					</div>

					<a href="{{ route('index') }}" class="btn btn-warning">Back</a>
				</div>
				<div class="col-md-2"></div>
			</div>
		</div>
	</div>


	
	


</body>
</html>