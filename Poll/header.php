<h1  style="padding-left:20px;">Brawlhalla Legend Poll -- 
<?php
// The database table "Legends" is used in this example.

$result = mysql_query("select count(1) FROM Legends");
$row = mysql_fetch_array($result);
$total = $row[0];
echo $total;
if ($total == 1)
	echo " vote";
else
	echo " votes";

?>
</h1>