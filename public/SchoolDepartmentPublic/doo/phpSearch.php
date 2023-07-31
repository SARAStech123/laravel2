<?php

$search = $_POST['search'];
var_dump($search);
$servername = "localhost";
$username = "root";
$password = "";
$db = "shcooltest";

$conn = new mysqli($servername, $username, $password, $db);

if ($conn->connect_error){
	die("Connection failed: ". $conn->connect_error);
}

$sql = "select * from schooldata where id =$search";

$result = $conn->query($sql);
var_dump($sql);


//if ($result->num_rows > 0){
while($row = $result->fetch_assoc() ){
	echo $row["id"]."  ".$row["shoolname"]."  ".$row["shooladdres"]."<br>";
}
/*} else {
	echo "0 records";
}*/

$conn->close();

?>