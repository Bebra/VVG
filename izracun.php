<?php

$vara = $_POST['prvi'];

$varb = $_POST['drugi'];

if ($vara==1 OR $varb==2) { echo "Jedan od kolokvija je negativan";
	
}
else {
	$vard = ($vara + $varb)/2;
	$varc = round($vard);
	echo $varc;
}





  ?>