<?php
// The database table "Legends" is used in this example.

if (isset($_POST['submit'])) {
	$query = "INSERT INTO Legends VALUES ('".$_POST['ada']."','".$_POST['asuri']."','".$_POST['barraza']."','".$_POST['bodvar']."','".$_POST['brynn']."','".$_POST['cassidy']."','".$_POST['ember']."','".$_POST['gnash']."','".$_POST['hattori']."','".$_POST['lordvraxx']."','".$_POST['lucien']."','".$_POST['orion']."','".$_POST['queennai']."','".$_POST['scarlet']."','".$_POST['sentinel']."','".$_POST['sirroland']."','".$_POST['teros']."','".$_POST['thatch']."')";
	mysql_query($query) or die(mysql_error());
	echo "Thanks for participating in the poll! <a href='http://pennpierson.com/pollsystem'>Click here</a> to view the updated poll.";
	exit;
}

if (isset($_POST['clear'])) {
	$query = "TRUNCATE TABLE Legends;";
	mysql_query($query) or die(mysql_error());
	echo "Poll data cleared. <a href='http://pennpierson.com/pollsystem'>Click here</a> to view the updated poll.";
	exit;
}

?>