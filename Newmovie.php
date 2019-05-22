<?php 
$con=mysql_connect("localhost","root","");

//check connection 
if(!$con)
{
echo "Failed to connect to MySql: ".mysql_error();
}
mysql_select_db("movies", $con);

extract($_POST);
$sql="INSERT INTO action (ID,NAME,PRICE) VALUES ('$_POST[ID]','$_POST[NAME]','$_POST[PRICE]')";

if (!mysql_query ($sql,$con))
{ 
die ('Error :'.mysql_error($con));
}
echo " 1 record added "; 

mysql_close($con);
?>







