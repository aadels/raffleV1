<?php

/*Contestant names*/
$contestants["Rick"] = "";
$contestants["Julie"] = "";
$contestants["Ann"] = "";
$contestants["Larry"] = "";

/*variables for count and random pick*/

$numberOfContestants = count($contestants);
$winningNumber = rand(1,$numberOfContestants);
$numberOfWinners = count($contestants[$name] = "winner!");


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
	if ($numberOfWinners > 1){
		$message = "We have a tie!";
	}
	elseif($numberOfWinners < 1){
		$message = "No winners this time. :(";
	}
	else{
		$message = "We have a winner!";
	}
?>