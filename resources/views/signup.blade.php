@extends('navbarsbootsdtrap')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Signup</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <style type="text/css">
  	.form1
  	{
  		width: 100%;
  		border-radius: 20px;
  		border-color: red;
  	}
  	.body1
  	{
  		background-color: black;
      color: white;
  	}
  </style>
</head>
<body class="body1">

<div class="container">
	<div class="jumbotron text-center form1">
		<h3 style="color: black;">Sign up</h3>
	</div>
  <form class="form1" method="GET" action="/storedata">
  {{csrf_field()}}
  	<div class="form-group">
  		<label for="username">Username:</label>
  		<input type="text" name="user" class="form-control" placeholder="Enter username">
      
  	</div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" name="email" placeholder="Enter email">
      
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" name="pwd" placeholder="Enter password">
      
    </div>
    <div class="form-group">
    	<label for="conpas">Confirm password:</label>
    	<input type="password" name="confirmpassword" class="form-control" placeholder="confirm password">
      
    </div>
    <div class="form-group">
    	Gender:
    <div class="form-check-inline">
      <label class="form-check-label" for="radio1">
        <input type="radio" class="form-check-input" id="radio1" name="optradio" value="option1">Male
      </label>
    </div>
    <div class="form-check-inline">
      <label class="form-check-label" for="radio2">
        <input type="radio" class="form-check-input" id="radio2" name="optradio" value="option2">Female
      </label>
      
    </div>
</div>
    <button type="submit" class="btn" style="background-color: lightgreen;" name="btn">Submit</button>
</div>
</form>
</div>
</body>
</html>
@endsection