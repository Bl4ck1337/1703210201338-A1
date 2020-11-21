<!DOCTYPE html>
<html>

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Edit Employee </title>
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
			<h2>Edit Employee</h2>
			@if(Session::has('success'))  
			<div class="alert alert-success">
			 <strong> {{ Session::get('success') }}</strong> 
			</div>

			@endif


		</div class="jumbotron text-center">
		<div class="content">
			<form  method="post" action="{{ URL::to('update-employee/'.$employee->id)}}">
				{{ csrf_field() }}
					  <div class="form-group">
					    <label for="name">Name:</label>
					    <input type="name" value="{{ $employee->name}}" class="form-control" placeholder="Enter name" name="name">
					  </div>

					   <div class="form-group">
					    <label for="email">Email address:</label>
					    <input type="email" value="{{ $employee->email}}" class="form-control" placeholder="Enter email" name="email">
					  </div>

					  <div class="form-group">
					    <label for="salary">Salary:</label>
					    <input type="number" value="{{ $employee->salary}}"  class="form-control" placeholder="Enter salary" name="salary">
					  </div>

					  <button type="submit"  class="btn btn-primary">Update</button>
					   
					  <a class="btn btn-secondary"  href=" {{ URL::to('employees') }} "  > Back </a>>


			</form>
			
		</div>
	</div>


</body>
</html>
