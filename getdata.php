<?php
$host="localhost";
$mysql_user="";
$mysql_pass="";
$db_name="id10031948_app_db";
$sql = "SELECT * FROM Score where GameNo=1;";
$con = mysqli_connect($host,$mysql_user,$mysql_pass,$db_name);
$result = mysqli_query($con,$sql);
$response = array();
while($row = mysqli_fetch_array($result))
{
    array_push($response,array("GameNo"=>$row[0],"TeamAname"=>$row[1],"TeamAkills"=>$row[2],"TeamAposition"=>$row[3],"TeamBname"=>$row[4],"TeamBkills"=>$row[5],"TeamBposition"=>$row[6],"TeamCname"=>$row[7],"TeamCkills"=>$row[8],"TeamCposition"=>$row[9]));
    
}

echo json_encode(array("server_response"=>$response));
mysqli_close($con)

?>
