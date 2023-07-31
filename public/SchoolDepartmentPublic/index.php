<?php include 'database.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>School Education Departement</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css1/style.css">
	<link rel="stylesheet" type="text/javascript" href="js1/js.js">
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


	 <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script> 
	 <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">


</head>
 <body>
	<div class="heading">
	     <h2>शालेय शिक्षण व क्रीडा विभाग- महाराष्ट्र</h2><h4>School and Sports Education Department- Maharashtra</h4><hr>  
            <!--<h5>/(ठाणे,मुंबई शहर,पालघर,रायगड)<br>(Thane,Mumbai City,Palghar,Raigad)</h5>  <hr>  </a>-->
 	</div>


  	<nav class="navbar navbar-expand-lg navbar-light"  style="background-color: #e3f2fd;">

   		 
  		<div class="collapse navbar-collapse" id="navbarNav">
   		   <ul class="navbar-nav">
      		<li class="nav-item">
           <a class="nav-link" href="http://localhost/SchoolDepartmentHome/#">मुखपृष्ठ</a>
          </li>
          <li class="nav-item ">
       		 <a class="nav-link" href="#">दृष्टीक्षेप</a>
      		</li>
      		<li class="nav-item">
       		 <a class="nav-link" href="#">आमच्या बद्दल</a>
      		</li>
      		<li class="nav-item">
        	 <a class="nav-link" href="http://localhost/schoolDepartmentPublic/#">शाळाची माहिती</a>
      		</li>
      		<li class="nav-item">
        	 <a class="nav-link" href="http://localhost/schoolDepartment/#">शाळाची</a>
      		</li>
    	   </ul></div>
         <ul class="navbar-nav " style="float: right">
            <li  class="nav-item">
              <a class="nav-link" href="http://localhost/SchoolDepartmentLogin/login.php?">LogIn 
           <img src=" img/login1.png" height="30" alt="login logo"></a>
          </li></ul>

	</nav> <hr> <br><br>
     

        <!--<form  action="#" method="post" style="text-align:center;"> 
           <label>Search By School ID</label>
          <input type="text" name="Search" id="myinput" onkeyup="myFunction()"  placeholder="Search for School ID.." title="Type in a name">
          <input type="submit" name="submit" onkeyup="myFunction()">
        </form><br><br>-->
<form   method="post" style="text-align:center;">
  Search <input type="text" name="search" id="myinput" >
  <input type ="submit"   name="submit" value="Submit">
  <input type="reset" name="reset" value=" Reset ">
</form><br><br>


  <?php 
    if(isset($_POST['submit'])){
       $search=$_POST['search'];
      $sql ="SELECT * FROM schooldata where School_Identity_Number='$search' ||Status='$search'|| School_Name='$search' || School_Addres='$search' || Email='$search'";
      $result1=mysqli_query($conn,$sql);
      if($result1){
      if(mysqli_num_rows($result1)>0){
      echo '
      <table class="table table-striped">
      <thead>
        <tr>
          <th> ID</th>
          <th> Status</th>
          <th>School name</th>
          <th> school address</th>
          <th> email</th> 
        </tr>
      </thead>';
    $row = mysqli_fetch_assoc($result1);
      echo'<tbody>
      <tr>
        <th><a>'.$row["School_Identity_Number"].'</a></th>
        <th>'.$row["Status"].'</th>
        <th>'.$row["School_Name"].'</th>
        <th>'.$row["School_Addres"].'</th>
        <th>'.$row["Email"].'</th>
      </tbody>
      </table>';

      }
      else{
      echo '<h4>data not found</h4>';
      }
    }
  }
?>
</table>
</div>


<section>
<table id="mytable" class="table table-striped" style="text-align:center;">
  <thead> 
  <tr>
      <th>School ID</th>
      <th>Status</th>
      <th>School Name</th>
      <th>Address</th>
      <th>Email</th>
  </tr>
</thead> 
 
<?php
/*$username = "root";
$password = "";
$dbname ="shcooltest";

//Create connection
$conn = new mysqli($servername, $username ,$password,$dbname);

$sql = "SELECT id, shoolname, shooladdres, email FROM schooldata";
$result = $conn->query($sql); */
while($row = $result->fetch_assoc()) 
{  
?>  
  <tr>
    <td><?php echo $row["School_Identity_Number"];?></td>
    <td><?php echo $row["Status"];?></td>
    <td><a href=""><?php echo $row["School_Name"];?></a></td>
    <td><?php echo $row["School_Addres"];?></td>
    <td><?php echo $row["Email"];?></td>
  </tr> 
<?php
 }
?>
         
<?php
  $conn->close();
?>
</table>

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
</script>
  <?php
  ?>   
</section>

<footer>
  <div>
   <a href="https://education.maharashtra.gov.in/">Maharashtra Goverment</a> 
  </div>
</footer>



</body>
</html> 

 
 
 
 