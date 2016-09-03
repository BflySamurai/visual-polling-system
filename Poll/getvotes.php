<?php
// The database table "Legends" is used in this example.

$result = mysql_query("SELECT SUM(NULLIF(ada ,0)) FROM Legends") or die(mysql_error());
$ada = mysql_result($result,0);
$result = mysql_query("SELECT SUM(NULLIF(asuri ,0)) FROM Legends") or die(mysql_error());
$asuri = mysql_result($result,0);
$result = mysql_query("SELECT SUM(NULLIF(barraza ,0)) FROM Legends") or die(mysql_error());
$barraza = mysql_result($result,0);
$result = mysql_query("SELECT SUM(NULLIF(bodvar ,0)) FROM Legends") or die(mysql_error());
$bodvar = mysql_result($result,0);
$result = mysql_query("SELECT SUM(NULLIF(brynn ,0)) FROM Legends") or die(mysql_error());
$brynn = mysql_result($result,0);
$result = mysql_query("SELECT SUM(NULLIF(cassidy ,0)) FROM Legends") or die(mysql_error());
$cassidy = mysql_result($result,0);
$result = mysql_query("SELECT SUM(NULLIF(ember ,0)) FROM Legends") or die(mysql_error());
$ember = mysql_result($result,0);
$result = mysql_query("SELECT SUM(NULLIF(gnash ,0)) FROM Legends") or die(mysql_error());
$gnash = mysql_result($result,0);
$result = mysql_query("SELECT SUM(NULLIF(hattori ,0)) FROM Legends") or die(mysql_error());
$hattori = mysql_result($result,0);
$result = mysql_query("SELECT SUM(NULLIF(lordvraxx ,0)) FROM Legends") or die(mysql_error());
$lordvraxx = mysql_result($result,0);
$result = mysql_query("SELECT SUM(NULLIF(lucien ,0)) FROM Legends") or die(mysql_error());
$lucien = mysql_result($result,0);
$result = mysql_query("SELECT SUM(NULLIF(orion ,0)) FROM Legends") or die(mysql_error());
$orion = mysql_result($result,0);
$result = mysql_query("SELECT SUM(NULLIF(queennai ,0)) FROM Legends") or die(mysql_error());
$queennai = mysql_result($result,0);
$result = mysql_query("SELECT SUM(NULLIF(scarlet ,0)) FROM Legends") or die(mysql_error());
$scarlet = mysql_result($result,0);
$result = mysql_query("SELECT SUM(NULLIF(sentinel ,0)) FROM Legends") or die(mysql_error());
$sentinel = mysql_result($result,0);
$result = mysql_query("SELECT SUM(NULLIF(sirroland ,0)) FROM Legends") or die(mysql_error());
$sirroland = mysql_result($result,0);
$result = mysql_query("SELECT SUM(NULLIF(teros ,0)) FROM Legends") or die(mysql_error());
$teros = mysql_result($result,0);
$result = mysql_query("SELECT SUM(NULLIF(thatch ,0)) FROM Legends") or die(mysql_error());
$thatch = mysql_result($result,0);

?>