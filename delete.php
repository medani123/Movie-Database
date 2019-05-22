<?php 
$id=$_GET['delete'];
$con=mysql_connect("localhost","root","");

if(!$con)
	{
	echo "Failed to connect to MySQL: " . mysql_error();
	}
	
mysql_select_db("movies",$con);
$sql="DELETE from action where ID=$id";

mysql_query($sql,$con);

echo "The info has been deleted";

mysql_close($con);
?>