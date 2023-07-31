<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<h2>Hey, {{ $data->SName }}</h2> 
<br>
    
<strong>School details: </strong><br>
    <!-- Display fields from the first form -->
    <strong>School Name:</strong> {{ $data->SName }}<br>
    <strong>School Email:</strong> {{ $data->SEmail }}<br>
    <strong>School Password:</strong> {{ $data->SPassword }}<br><br>



<a href="http://127.0.0.1:8000/scllogin">Click Here</a><h3>For Login</h3>

Thank you
</body>
</html>