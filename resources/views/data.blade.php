<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
		<link rel="stylesheet" type="text/css" href="school/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="school/css1/stylesheet.css">
	
</head>
<body>
	@csrf
		<div class="heading">
	     <a><h2>School and Sports Education Department- Maharashtra</h2><h4>School and Sports Education Department- Maharashtra</h4><hr>  </a>
 	</div>



 	<nav class="navbar navbar-expand-lg navbar-light"  style="background-color: #e3f2fd;">
   		
  		 
  		<div class="collapse navbar-collapse" id="navbarNav">
   		   <ul class="navbar-nav">
      		<li class="nav-item">
       		 <a class="nav-link" href="#">{{$user['schoolname']}}</a>
      		</li>
      		
      		
	</nav> <hr><br><br>


<table id="mytable" class="table table-striped" style="text-align:left;">

<tr>
	<td>	School Name</td>
	<td>{{$user['schoolname']}}</td>
</tr>
<tr>
	<td>Type of school</td>
	<td>{{$user['school_type']}}</td>
</tr>

<tr>
	<td>Institute</td>
	<td>{{$user['institution']}}</td>
</tr>

<tr>
	<td>Government approval order</td>
	<td><a href="{{url('/download/'.$user->id)}}">{{$user['Government_approval_order']}}</a></td>
</tr>


<tr>
	<td>Director of Education Certificate</td>
	<td><a href="{{url('/download/'.$user->id)}}">{{$user['Director_of_Education_Certificate']}}</a></td>
</tr>
<tr>
	<td>School Fees</td>
	<td>{{$user['School_fee_charges']}}</td>
</tr>
<tr>
	<td>Bus Facility</td>
	<td>{{$user['Bus_facility']}}</td>

</tr>
<tr>
	<td>Total Students</td>
	<td>{{$user['Total_number_of_students']}}</td>
</tr>
<tr>
	<td>Total Minority student</td>
	<td>{{$user['Number_of_Minority_Students']}}</td>
</tr>

<tr>
	<td>Total Teachers And workers</td>
	<td>{{$user['Total_Teachers_Workers']}}</td>
</tr>
<tr>
	<td>Fire Facility </td>
	<td>{{$user['Fire_NOC']}}</td>
</tr>

</table>
</body>
<footer>@include('footer')</footer>
</html>