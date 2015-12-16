<?php
echo "<div class=\"post\">\n";
echo "<h1>Kategorie odzieży</h1>";


$qry0 = "SELECT DISTINCT kategoria FROM produkty WHERE plec = '0'";
$qry1 = "SELECT DISTINCT kategoria FROM produkty WHERE plec = '1'";
$con = db_connect();
$result0 = mysql_query($qry0);
$result1 = mysql_query($qry1);
echo "<table>\n
		<tr>\n
			<td>\n
				<h2>Kategorie męskie</h2>\n
			</td>\n
			<td>\n
				<h2>Kategorie damskie</h2>\n
			</td>\n
		</tr>\n
		<tr>\n
			<td>\n";
while($array = mysql_fetch_array($result0))
{
	$name = $array['kategoria'];
	echo "<a class=\"cloud2\" href='index.php?view=kategoria&kat=".$name."&plec=0'>$name</a><br/>";
}
echo "</td>\n<td>";
while($array = mysql_fetch_array($result1))
{
	$name = $array['kategoria'];
	echo "<a class=\"cloud2\" href='index.php?view=kategoria&kat=".$name."&plec=1'>$name</a><br/>";
}

echo "</tr></table></div>";
echo "<div class=\"clear\"></div>";
?>