<?php

session_start();

$id_prod = $_GET['id'];
$_SESSION['id_produktu']=$id_prod;
$qry = "SELECT * FROM produkty WHERE id_produktu = '$id_prod'";
$con = db_connect();
$result = mysql_query($qry);
$array = mysql_fetch_array($result);
echo "<form action=\"index.php?view=dodaj\" method=\"post\" id=\"dodajform\">";
echo "<div class=\"post\">\n";
echo "<table>\n<tr>\n";
echo "<td>\n<img src=\"produkty/".$array[0].".jpg\" width=\"200\" height=\"200\" alt=\"Obraz".$array[0]."\" class=\"float-left\" /></a>\n</td>\n";
echo "<td class='cloud1'>\n<h2>".$array[1]."</h2><br/>Cena: ".$array[3]."<br/><br/>\n".$array[7]."\n<br/><br/>";
echo "<input type=\"submit\" name=\"submitDodaj\" id=\"submitDodaj\" value=\"Dodaj do koszyka\"></input></td>\n</tr>\n";
echo "</table>\n</div>\n</form>";

echo "<div class=\"clear\"></div>";
?>