<?php
session_start();
if (!isset($_SESSION['username'])) {
	header("Location: index.php");
}
?>

<!DOCTYPE html>
<html>

<head>
	<link rel="icon" href="res/thinkgeek-grey.png" sizes="16x16">
	<link rel="stylesheet" type="text/css" href="css/fandom.css">
	<link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
	<title>Choose your Type- ThinkGeek</title>
	<style type="text/css">
		#logo {
			width: 20.1%;
			float: left;
		}

		body {
			margin-top: 3em;
			margin-left: 3em;
		}
	</style>
</head>

<body bgcolor=black>
	<div id="logo">
		<img src="res/thinkgeek-grey.png" width="100%">
	</div>

	<div id=login>
		<a href="destroy.php"><span id="logoutButton">Log Out</span></a><br><br>
		<?php echo $_SESSION['username']; ?>
	</div>
	<br>

	<div id="header"> <strong>Choose Your Type</strong></div>

	<table cellspacing="30px" cellpadding="10px">
		<tr>

			<td>
				<div id="got">
					<a href="got.php" style="text-decoration: none;">
						<img class="circle" src="res/main/gotc.png">
						<p><strong>Board Game</strong></p>
					</a>
				</div>
			</td>

			<td>
				<div id="hp">
					<a href="hp.php" style="text-decoration: none;">
						<img class="circle" style="height: 200px; width: 300px" src="res/main/hpc.png">
						<p><strong>Lego & Stuffed</strong></p>
					</a>
				</div>
			</td>

			<td>
				<div id="hg">
					<a href="hg.php" style="text-decoration: none;">
						<img class="circle" style="height: 200px; width: 300px" src="res/main/hgc.png">
						<p><strong>Remote Control</strong></p>
					</a>
				</div>
			</td>

		</tr>

	</table>

</body>

</html>