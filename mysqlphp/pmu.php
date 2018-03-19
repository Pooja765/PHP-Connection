<html>
<head>
  <title>Census Form</title>
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
$sql="update Employee set salary = 26000 where Empid=12342;";
if($conn->query($sql)== TRUE)
{
  echo "updated successfully";
}else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
echo "<hr>";
$sql="update Employee set salary = 26000 where Empid=12365;";
if($conn->query($sql)== TRUE)
{
  echo "updated successfully";
}else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
