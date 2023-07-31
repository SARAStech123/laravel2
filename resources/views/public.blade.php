<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>School Information</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css1/style.css">
	<link rel="stylesheet" type="text/javascript" href="js1/js.js">
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script> 
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
  

@include('header')
</head>
 <body><center>
	

  	 

        <!--<form  action="#" method="post" style="text-align:center;"> 
           <label>Search By School ID</label>
          <input type="text" name="Search" id="myinput" onkeyup="myFunction()"  placeholder="Search for School ID.." title="Type in a name">
          <input type="submit" name="submit" onkeyup="myFunction()">
        </form><br><br>-->
<form action="{{ route('public') }}"  method="get" style="text-align:center;" name="keyword"> 
  <input type="text" name="keyword" class="form-control-sm" id="myinput" placeholder="Enter School Name">
  <input type ="submit" class="btn btn-primary"  name="submit" value="Search">
  <input type="reset" class="btn btn-primary" name="reset" value=" Reset ">
</form>
@if ($users->count() > 0)
    
        @foreach ($users as $results)
             <!-- Replace column_name with the actual column name to display -->
        @endforeach
    
@else
    <p>No results found.</p>
@endif
<br><br>
</div>
<section>
<center>
<div class="table">
<table style="text-align:center;" border="1">
  <thead> 
  <tr>
      <th style="text-align: left;">School ID</th>
      <th style="text-align: left;">Status</th>
      <th style="text-align: left;">School Name</th>
      <!--<th>Address</th>-->
      <th style="text-align: left;">Email</th>
  </tr>
</thead> 
  @foreach($users as $user)
          <tr>
            <td align="center">{{$user->id}}</td>
            <td align="left">{{$user->approved}}</td>
             <td align="left"><a href="fetch-data?school={{$user['SName']}}">{{$user->SName}}</a></td>
            <td align="left">{{$user->SEmail}}</td>          
          </tr>
  @endforeach
</table>
</div>

<!--
<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("myinput");
    filter = input.value.toUpperCase();
    table = document.getElementById("mytable");
    tr = table.getElementsByTagName("tr");
      //alert(tr);
    console.log(tr);
  for (i = 0; i < tr.length; i++) {
    console.log(i);
    td = tr[i].getElementsByTagName("td")[0];
    //alert(td);
    console.log(tr);
      if (td) {
          txtValue = td.textContent || td.innerText;
            //alert(txtValue);
          console.log("text valu "+txtValue);
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
           console.log("index"+txtValue.toUpperCase().indexOf(filter)); 
          tr[i].style.display = "";

      }
       else {
          tr[i].style.display = "none";
      }
    }       
  }
}
</script>-->
  <?php
  ?>   
</section>
<!--
<footer>
  <div>
   <a href="https://education.maharashtra.gov.in/" class="btn btn-primary">Maharashtra Goverment</a> 
  </div>
</footer>-->

</body>
<footer>@include('footer')</footer>
</html> 

 
 
 
 