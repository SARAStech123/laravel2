<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registration form</title>
	<link rel="icon" type="image/x-icon" href="https://e7.pngegg.com/pngimages/710/665/png-clipart-computer-icons-user-profile-symbol-register-button-miscellaneous-blue.png">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<!--<style>
		form{
			border: 8px solid #E5E4E2;
			height: 490px;
			width: 500px;
			background-color: #FFDAB9;
			background: #E5E4E2;

		}
		body{
			background-color: silver;
		}
		hr{
			border: 5px solid #E5E4E2;

		}
		button{
			padding: 10px 100px;
			cursor: pointer;
			text-align: center;
			font-size: 20px;
			background: #E5E4E2;
			background-color: silver;

		}
		input{
			padding: 10px 50px;
			
			text-align: center;
			
		}
		input.pa{
			padding: 10px 35px;
			text-align: center;
		}
		label{
			font-size: 20px;

		}

	</style>-->
	<style>
    .center-align {
        display: flex;
        justify-content: center;
    }
</style>
	    <script>
      function showForm(type) {
        var userForm = document.getElementById("user-form");
        var adminForm = document.getElementById("admin-form");
        if (type === "user") {
          userForm.style.display = "block";
          adminForm.style.display = "none";
        } else if (type === "admin") {
          userForm.style.display = "none";
          adminForm.style.display = "block";
        }
      }
    </script>
</head>
<body>
@include('header')
	<div class="container">
      <div>
			<center>
				@include('dropbtn')
			</center>
		</div><br>
      <p class="text-center">Choose your Registration</p>
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <div class="btn-group w-100">
            <button type="button" class="btn btn-primary" onclick="showForm('user')">Admin registration</button>
            <button type="button" class="btn btn-primary" onclick="showForm('admin')">School registration</button>
          </div>
          <br><br>

<form id="user-form" action="/create" method="POST" style="display:none">
	@csrf
	<fieldset>
    
	<div class="form__group field">
	<!--<h1 style="color:">REGISTRATION FORM</h1>
	<hr>-->
	<div class="form-group">
	<label for="FName">Fisrt Name:</label>
	<input type="text" name="FName" id="username" class="form-control" required ></div>

	<div class="form-group">
	<label for="LName">Last Name: </label>
	<input type="text" name="LName" class="form-control" required></div>

	<!--<div class="form-group">
	<label for="Class">Class:</label>
	<input type="text" name="Class" class="form-control" required > </div>-->

	<div class="form-group">
	<label for="Email">Email:</label>
	<input type="text" name="Email" class="form-control" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"> </div>

	<div class="form-group">
	<label for="Password">Password:</label>
	<input type="Password" name="Password" class="form-control" required minlength="6" id="myInput" class="pa"></div>
	</fieldset>
	<!--<input type="checkbox" onclick="myFunction()">Show Password-->

	<script>
		function myFunction() {
 	 	var x = document.getElementById("myInput");
  		if (x.type === "password") {
    		x.type = "text";
  			} 
  		else {
    		x.type = "password";
  			}
		}
	</script>
	<input type="hidden" name="roll"  value="5">

	<button class="btn btn-primary">Submit</button>
	@if($errors->any())
	<div class="alert alert-danger">
		<ul>
			@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
@endif
	</form>
<form id="admin-form" action="/school" method="POST" style="display:none">
	@csrf
            <fieldset>
              
              <div class="form-group">
                <label for="SName">School Name:</label>
                <input type="text" id="SName" name="SName" class="form-control" required>
              </div>
                 <div class="form-group">
                <label for="SEmail">School email:</label>
                <input type="text" id="SEmail" name="SEmail" class="form-control" required>
              </div>
              
              <div class="form-group">
                <label for="SPassword">School Password:</label>
                <input type="Password" id="SPassword" name="SPassword" class="form-control" required>
              </div>
              <input type="hidden" name="roll2"  value="3">
              <input type="hidden" name="approved" value="pending">
            </fieldset>
            
            <!--<input type="submit" value="Submit" class="btn btn-primary">-->
            <button class="btn btn-primary">Submit</button>
</form>

</body>

</html>