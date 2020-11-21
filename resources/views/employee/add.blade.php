<!DOCTYPE html>
<html>

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Employee Add</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/heroic-features.css" rel="stylesheet">

</head>

<body>
	<div class="container">
		<div class= "jumbotron text-center">
			<h2>Add Employee</h2>
			@if(Session::has('success'))  
			<div class="alert alert-success">
			 <strong> {{ Session::get('success') }}</strong> 
			</div>

			@endif


		</div class="jumbotron text-center">
		<div class="content col-md-8 offset-md-2">
			<form  method="post" action="{{ URL::to('employee-store ') }}">
				{{ csrf_field() }}
					  <div class="form-group">
					    <label for="name">Name:</label>
					    <input type="name"  value="{{ old('name') }}" required class="form-control" placeholder="Enter name" name="name">
					    @if($errors->first('name'))
					    <div class="alert alert-danger">
					    	{{ $errors->first('name') }}
					    </div>
					    @endif
					  </div>

					   <div class="form-group">
					    <label for="email">Email address:</label>
					    <input type="email" value="{{ old('email') }}" required class="form-control" placeholder="Enter email" name="email">
					    @if($errors->first('email'))
					    <div class="alert alert-danger">
					    	{{ $errors->first('email') }}
					    </div>
					    @endif
					  </div>

					  <div class="form-group">
					    <label for="salary">Salary:</label>
					    <input type="number" value="{{ old('salary') }}" class="form-control" placeholder="Enter salary" name="salary">
					    @if($errors->first('salary'))
					    <div class="alert alert-danger">
					    	{{ $errors->first('salary') }}
					    </div>
					    @endif
					  </div>

					  <button type="submit" class="btn btn-primary">Add</button>
					  <a class="btn btn-secondary"  href=" {{ URL::to('employees') }} "  > Back </a>


			</form>
			
			
		</div>
	</div>


</body>
</html>
