<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Add School</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css1/stylehome.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script> 


</head>
<body>
@include('header')
<div class="container"><br>
    <h3 class="text-center">Add School</h3>
    <p class="text-center">Enter the school details</p>
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="border p-4">

<form method="POST" action="addUser">
    @csrf
    <div class="form-group">
    <label><b>School Name:</b></label>
    <input type="text" name="SName" class="form-control" required="">
    </div>

    <div class="form-group">
    <label><b>School Email:</b></label>
    <input type="text" name="SEmail" class="form-control" required="">
    </div>

    <div class="form-group">
    <label><b>School Password:</b></label>
    <input type="password" name="SPassword" class="form-control" required="">
    <input type="hidden" name="approved" value="pending">
    <input type="hidden" name="roll2"  value="3">
    </div><br>

    <button type="submit" class="btn btn-primary">Add School</button>
</form>
</div>
</div>
</div>
</div>
</body>
</html>