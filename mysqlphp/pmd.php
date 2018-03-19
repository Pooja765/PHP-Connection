<html>
<head>
  <title>Census Form</title>
<body>
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
$sql="delete from Employee where EmpId=12354";


if($conn->query($sql)== TRUE)
{
  echo "Deleted the record";
}else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

echo "<hr><br>";
$sql="alter table Employee drop column Lastname";


if($conn->query($sql)== TRUE)
{
  echo "Deleted the table";
}else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
</body>
</html>
