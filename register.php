<?php 
require "connection.php";
$userid=$_POST["User_ID"];
$password=$_POST["Password"];
$name=$_POST["Name"];
$email=$_POST["Email"];
$phone=$_POST["Phone"];

$sql_query = "insert into register values('$userid','$password','$name','$email','$phone');";
if(mysqli_query($con, $sql_query))
{
echo "<h3>Data Successfully Inserted</h3>";
}
else
{
echo "Data Not Inserted".mysqli_error($con);
}

?>