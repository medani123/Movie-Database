<center>
<?php
$id=$_GET['search'];


//connect to the server
$connect= mysql_connect("localhost","root","");
if(!$connect)
{
die('Could not connect: '.mysql_error($connect));
}

//connect to the database
mysql_select_db("movies",$connect);
$lala="SELECT * FROM action WHERE ID='$id'";
$lals="SELECT * FROM romance WHERE ID='$id'";
//query the database
$q=mysql_query($lala,$connect);

//if (!$q) { // add this check.
//    die('Invalid query: ' . mysql_error());
//}


//fetch the results/ convert results to array
echo "<table border=2>";
echo "<tr>";
	echo "<td colspan=6 align='middle'><h3>INFO</h3></td>";
echo "</tr>";
echo "<tr>";
	echo "<td align='middle'><b>id</b></td>";
	echo "<td align='middle'><b>name</b></td>";
	echo "<td align='middle'><b>price</b></td>";
	
echo "</tr>";

	
	while($xyz=mysql_fetch_array($q)) 
	{
		$id=$xyz['ID'];
		$name=$xyz['NAME'];
		$price=$xyz['PRICE'];
		
		
		echo "<tr>";
			echo "<td align='middle'>$id</td>";
			echo "<td align='middle'>$name</td>";
			echo "<td align='middle'>$price</td>";
			
		echo "</tr>";
	}
echo "</table>";


?>
</center>