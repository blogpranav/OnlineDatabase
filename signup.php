<?php 
require "connection1.php";
$password=$_POST["Password"];
$name=$_POST["Name"];
$email=$_POST["Email"];
$phone=$_POST["Phone"];
$sec=$_POST["Section"];
$branch=$_POST["Branch"];

$sql_query = "insert into signup values('$name','$email','$phone','$password','$branch','$sec');";
if(mysqli_query($con, $sql_query))
{
echo "<h3>Data Successfully Inserted</h3>";
}
else
{
echo "Data Not Inserted".mysqli_error($con);
}

?>