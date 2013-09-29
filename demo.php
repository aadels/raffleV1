<!DOCTYPE html>
<html>

	<head>
		<title>Raffle v1</title>
		
		<?php
		require_once('logic.php');
		?>
	
	</head>
	
	<body>

		Refresh to play again<br><br>
		The winning number is <?contestanst?>! <br><br>

		<? foreach($contestants as $name => $status): ?>
			<?=$name?> is a <?=$status?><br>
		<? endforeach; ?>

	</body>



</html>