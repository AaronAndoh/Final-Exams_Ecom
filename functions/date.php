<?php

// Function to find the difference
// between two dates.
function dateDiffInDays($date1, $date2)
{
	// Calculating the difference in timestamps
	$diff = strtotime($date2) - strtotime($date1);

	// 1 day = 24 hours
	// 24 * 60 * 60 = 86400 seconds
	return abs(round($diff / 86400));
}


?>
