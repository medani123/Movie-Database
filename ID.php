<?php
$table=$_GET['ISBN'];
//connect to the server 
$connection=mysql_connect("localhost","localhost","");
if (!$connection)
{
	die('Could not connect:'.mysql_error($connection));
}

//connect to the database
mysql_select_db("test", $connection);
$sql="SELECT BookTitle FROM books WHERE ISBNNo = $table";

//collect the data
$query=mysql_query($sql,$connection);

//display the data through fetch

echo "<table border=2>";

echo "<tr>";
	echo "<td align='middle'><b>BookTitle</b></td>";
	
echo "</tr>";

while($lul=mysql_fetch_array($query))
{	
	$BookTitle=$lul['BookTitle'];
	echo "<tr>";	
	echo "<td align='middle'>$BookTitle</td>";
	echo "</tr>";
}

echo "</table>";

?>