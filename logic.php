<?php

/*Contestant names*/
$contestants["Rick"] = "";
$contestants["Julie"] = "";
$contestants["Ann"] = "";
$contestants["Larry"] = "";

/*variables for count and random pick*/

$numberOfContestants = count($contestants);
$winningNumber = rand(1,$numberOfContestants);
$numberWinners = count($randomNumber == $winningNumber);


/*loop through all contestants*/
foreach($contestants as $name => $status) {
	
	/*get random number*/
	$randomNumber = rand(1,$numberOfContestants);
	

	/*compare random number for each contestant to the wimnning number*/
	if ($randomNumber == $winningNumber){
		$contestants[$name] = "winner!";
	}
	else{
		$contestants[$name] = "Loser :(";
	}

}
/*print message about winner(s), no winner, or tie*/
	if ($numberWinners = 0){
		$message = "No winners this round :(";
	}
	elseif{
		$numberWinners = 1;
		$message = "We have a winner!";
	}
	else{
		$numberWinners > 1;
		$message = "We have a tie!";
	}

?>