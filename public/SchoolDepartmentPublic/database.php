<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname ="shcooltest";
//Create connection
$conn = new mysqli($servername, $username ,$password,$dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
else{
  //echo "connected";
}

  $conn = new mysqli($servername, $username ,$password,$dbname);
  $sql = "SELECT School_Identity_Number,Status,School_Name,School_Addres,Email FROM schooldata";
  $result = $conn->query($sql);


  
  $sqll = "SELECT School_Identity_Number,Status,School_Name,School_Addres,Email FROM schooldata";
  $result = $conn->query($sql);
 
?>


<!--$search = $_POST['search'];
var_dump($search);

$sqll = "select from schooldata where id =$search";
//if ($result->num_rows > 0){

$result =$conn->query($sqll);-->
        




 
<!--
 Create database
$sql = "CREATE DATABASE shcooltest";
if ($conn->query($sql) === TRUE) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . $conn->error;
}

$conn->close();

sql to create table
$sql = "CREATE TABLE schooldata (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
schoolname VARCHAR(30) NOT NULL,
schooladdres VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";


$sql = "INSERT INTO schooldata (shoolname, shooladdres, email)
VALUES ('Nutan High School', 'Shivaji Nagar,Nanded', 'Nutan@example.com'),
 ('Atherve High School', 'shanti Nagar,kandivali', 'Atherve@example.com'),
('St.merry High School', 'Guru Nagar,Malad', 'Marry@example.com'),
('Shifa High School', 'Nandanvan Nagar,Bandra', 'Shifa@example.com')
 ";
if ($conn->query($sql) === TRUE) {
  echo "Table  shcooldata created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}
$sql = "SELECT id, shoolname, shooladdres FROM schooldata";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - School Name: " . $row["shoolname"]. "-Address " . $row["shooladdres"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>-->

 