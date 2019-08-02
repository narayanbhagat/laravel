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

</head>
<body>
  
<div class="container">
    <br><br>
    @if($errors->any())
        <div class="alert alert-danger">
            @foreach($errors->all() as $error)
               <ul>
                   <li> {{ $error }}</li>
               </ul>
            @endforeach
        </div>
    @endif

    <br><br>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    
   <div class="row">
        <div class="col-md-12">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <form method="post" action="{{ url('/user/store') }}">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <input type="text" name="name" placeholder="Enter name" class="form-control">
                    </div>
                     <div class="form-group">
                        <input type="text" name="email" placeholder="Enter email" class="form-control">
                    </div>

                   <input type="submit" name="send" value="send" class="btn btn-success">
                   <a href="{{ route('index') }}" class="btn btn-primary">Back</a>
                </form>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
</div>
   
</body>
</html>