<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Contact us</title>
	<link rel="stylesheet"  href="">
</head>
<body>
<!--@if($data->roll == 5)-->
<h2>Hey, {{ $data->FName }}</h2> 
<br>
    
<strong>User details: </strong><br>
<strong>FName: </strong>{{ $data->FName }} <br>
<strong>LName: </strong>{{ $data->LName }} <br>
<strong>Class: </strong>{{ $data->Class }} <br>
<strong>Email: </strong>{{ $data->Email }} <br>
<strong>Password: </strong>{{ $data->Password }} <br><br>
<!--
@else
     Display fields from the first form 
    <strong>School Name:</strong> {{ $data->SName }}<br>
    <strong>School Email:</strong> {{ $data->SEmail }}<br>
    <strong>School Password:</strong> {{ $data->SPassword }}<br><br>
@endif
-->

<a href="http://127.0.0.1:8000/signin">Click Here</a><h3>For Login</h3>

Thank you


</body>
</html>
