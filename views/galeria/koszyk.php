<?php

	session_start();

	$id_kosz = $_SESSION['id_koszyka'];
	
	$qry = "SELECT * FROM zamowioneprodukty WHERE Koszykid_koszyka = '$id_kosz'";
	
	$con = db_connect();
	$result = mysql_query($qry);
	if(!$result)
	{
		echo mysql_error;
		return false;
	}
	echo "<div class=\"post\">\n<table>\n";
	while($array1 = mysql_fetch_array($result))
	{
		$id_prod = $array1[3];
		$qry1 = "SELECT * FROM produkty WHERE id_produktu = '$id_prod'";
		$result1 = mysql_query($qry1);
		$array = mysql_fetch_array($result1);
		echo "<tr>\n<td>\n<a href=\"index.php?view=produkt&id=".$array[0]."\"><img src=\"produkty/".$array[0].
			".jpg\" width=\"100\" height=\"100\" alt=\"Obraz".$array[0]."\" class=\"float-left\" /></a>\n</td>\n";
		echo "<td>\n<table>\n<tr>\n<td>\n<h2>".$array[1]."</h2><br/>Cena: ".$array[3]."</td>\n<td>\n".
				$array[7]."\n</td>\n</tr>\n</table>\n</td>\n</tr>\n";
	}
	echo "</table>\n</div>\n";
	
	echo "<div class=\"clear\"></div>";
?>