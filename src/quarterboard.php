<?php

require_once('qtrboardtable.php');

sessionCheck("login.php");

?>

<!DOCTYPE html>
<html>
	<head>
		<title>
			Leaderboard
		</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
		<meta http-equiv="Pragma" content="no-cache" />
		<meta http-equiv="Expires" content="0" />
		<link rel="stylesheet" type="text/css" href="../css/style.css">
	</head>
	<body class="blackBack">
		<div class="wrapper">
			<div class="qtrboardContainer">
				<div class='formTitle'>
					QUARTERLY LEADERBOARD<br>
				</div>
				<div class="formLink">
					<div class='quartertext'>Current Quarter ends after Week <?php echo $qtrend; ?></div>
					<a href="leaderboard.php">Return to Leaderboard</a>
					<a href="home.php">Return to Home Page</a>				
				</div>
				<div>			
					<?php echo $qtrboard; ?>				
				</div>
				<div>
					<a class="formLink" href="home.php">Return to Home Page</a>
					<br>
					<br>
				</div>
			</div>
		</div>
	</body>
</html>
