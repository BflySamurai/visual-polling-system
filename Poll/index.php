<html>
<head>
</head>
<title>Poll</title>
<body style="padding-left:20">

<?php
include 'dbconfig.php';
include 'dbwrite.php';
include 'header.php';
include 'getvotes.php';
include 'canvas.php';
?>

<p>Vote for your Brawlhalla legends. <i>This is an example poll. Feel free to clear the data and vote multiple times.</i></p>

<form method="post" action="">
	
	<div style="float:left; width:300px"><input type="submit" name="submit" Value="Submit Data"></div>
	<div style="float:left;"><input type="submit" name="clear" Value="Clear Data"></div>
	<div style="clear:both"></div>

	<table>
		<tbody>
			<tr>
				<th style="min-width:50px"></th>
				<th style="min-width:50px"></th>
				<th style="min-width:50px"></th>
				<th style="min-width:50px"></th>
				<th style="min-width:50px"></th>
				<th style="min-width:50px"></th>
				<th style="min-width:50px"></th>
				<th style="min-width:50px"></th>
			</tr>
			<tr>
				<td>Ada</td>
				<td><input type="checkbox" name="ada" value=1></td>
				<td>Cassidy</td>
				<td><input type="checkbox" name="cassidy" value=1></td>
				<td>Lucien</td>
				<td><input type="checkbox" name="lucien" value=1></td>
				<td>Sir Roland</td>
				<td><input type="checkbox" name="sirroland" value=1></td>
			</tr>
			<tr>
				<td>Asuri</td>
				<td><input type="checkbox" name="asuri" value=1></td>
				<td>Ember</td>
				<td><input type="checkbox" name="ember" value=1></td>
				<td>Orion</td>
				<td><input type="checkbox" name="orion" value=1></td>
				<td>Teros</td>
				<td><input type="checkbox" name="teros" value=1></td>
			</tr>
			<tr>
				<td>Barraza</td>
				<td><input type="checkbox" name="barraza" value=1></td>
				<td>Gnash</td>
				<td><input type="checkbox" name="gnash" value=1></td>
				<td>Queen Nai</td>
				<td><input type="checkbox" name="queennai" value=1></td>
				<td>Thatch</td>
				<td><input type="checkbox" name="thatch" value=1></td>
			</tr>
			<tr>
				<td>Bodvar</td>
				<td><input type="checkbox" name="bodvar" value=1></td>
				<td>Hattori</td>
				<td><input type="checkbox" name="hattori" value=1></td>
				<td>Scarlet</td>
				<td><input type="checkbox" name="scarlet" value=1></td>
			</tr>
			<tr>
				<td>Brynn</td>
				<td><input type="checkbox" name="brynn" value=1></td>
				<td>Lord Vraxx</td>
				<td><input type="checkbox" name="lordvraxx" value=1></td>
				<td>Sentinel</td>
				<td><input type="checkbox" name="sentinel" value=1></td>
			</tr>
		</tbody>
	</table>
 </form>

</body>
</html>