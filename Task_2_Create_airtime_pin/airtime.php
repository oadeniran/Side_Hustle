<?php
	for($i = 0; $i < 200; $i++)
	{
	// Randomly chose an integer between the min value : 1000
	// and max value : 10000000000
	echo($i+1 . ". " . rand(1000000, 1000000000000). '<br>')
	;
	}
?>