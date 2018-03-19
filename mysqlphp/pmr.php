<html>
<head>
  <title>Census Form</title>
  <style>
  table,tr,td{
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

$sql="select max(salary) as secondheighstsalary, Firstname
from Employee
where salary <(select max(salary) from Employee)
group by(Firstname);";
$result = $conn->query($sql);
//table
echo "<table>";
echo "<tr><td> Max Salary</td><td> Name</td></tr>";
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo "<tr>";
        echo "<td> " . $row["secondheighstsalary"]. "</td>
         <td> " . $row["Firstname"]. "</td>" ;
      echo"</tr>";
    }
} else {
    echo "0 results";
}
echo "</table>";

echo "<hr><br>";
$sql="select Firstname,joindate,salary
from Employee";
$result = $conn->query($sql);
//table

echo "<table>";
echo "<tr><td> Firstname</td><td>Joindate</td><td>Salary</td></tr>";
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo "<tr>";
        echo "<td>" . $row["Firstname"]. "</td>
         <td>" . $row["joindate"]. "</td><td>" . $row["salary"]. "</td>" ;
      echo"</tr>";
    }
} else {
    echo "0 results";
}
echo "</table>";

$conn->close();
?>
