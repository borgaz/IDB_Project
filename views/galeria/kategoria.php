<?php
	$kat = $_GET['kat'];
	$plec = $_GET['plec'];
	$qry = "SELECT * FROM produkty WHERE plec = '$plec' and kategoria = '$kat'";
	$con = db_connect();
	$result = mysql_query($qry);
	if(!$result)
	{
		echo mysql_error;
		return false;
	}
	echo "<table>\n";
	while($array = mysql_fetch_array($result))
	{
		echo "<tr>\n<div class=\"post\">\n";
		echo "<td>\n<a href=\"index.php?view=produkt&id=".$array[0]."\"><img src=\"produkty/".$array[0].
			".jpg\" width=\"100\" height=\"100\" alt=\"Obraz".$array[0]."\" class=\"float-left\" /></a>\n</td>\n";
		echo "<td>\n<table>\n<tr>\n<td>\n<h2>".$array[1]."</h2><br/>Cena: ".$array[3]."</td>\n<td>\n".
				$array[7]."\n</td>\n</tr>\n</table>\n</td>\n</tr>\n";
	}
	echo "</table>\n";
	
	
echo "<div class=\"clear\"></div>";
?>