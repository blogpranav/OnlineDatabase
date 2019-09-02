<?php

require "connection.php";
$user_id = $_POST["User_ID"];
$password = $_POST["Password"];
 
$sql_query = "select Name from register where User_ID like '$user_id' and Password like '$password';";
 
$result = mysqli_query($con, $sql_query);
 
if(mysqli_num_rows($result) > 0)
{
$row = mysqli_fetch_assoc($result);
$message = $row["Name"];
echo "<h3> Login Success </h3>";
echo "<h3> Welcome ".$message ."</h3>";
}

else {
echo "Wrong Credentials";
}

?>