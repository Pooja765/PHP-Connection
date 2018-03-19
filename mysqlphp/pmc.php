<html>
<head>
  <title>Census Form</title>
<style>
table,td
  {
    border: 1px solid black;
   width:auto;
  }
  </style>
<body>
           <h1><center>Details of Employee</center></h1>

<?php
$sn = "localhost";
$un = "root";
$pass = "aissel123";
$db = "company";

// Create connection
$conn = new mysqli($sn, $un, $pass, $db);
// Check connection
if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
}

//insert values
$fn=$_GET["fname"];
//$mn=$_GET["mname"];
//$ln=$_GET["lname"];
$i1=$_GET["eid"];
$m1=$_GET["mob"];
$d1=$_GET["do"];
$jd=$_GET["jd"];
$s1=$_GET["sal"];

$sql="insert into Employee(Firstname,Empid,Phno,DOB,joindate,salary) values('$fn','$i1','$m1','$d1','$jd','$s1');";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
      echo "<table>";
      echo "<tr>";
      echo "<td> " . $fn . "</td>";
      echo "<td> " . $i1 . "</td>";
      echo "<td> " . $m1 . "</td>";
      echo "<td> " . $d1 . "</td>";
      echo "<td> " . $jd . "</td>";
      echo "<td> " . $s1 . "</td>" ;
      echo"</tr>";

echo "<table>";

$conn->close();
?>
