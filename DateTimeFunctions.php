<?php

	define('ln', "<br>");

	//formatting date	
	$dt = new DateTime("2012-06-16 16:42:33", new DateTimeZone(date_default_timezone_get()));
	echo "Date: " . $dt->format("Y-m-d h:i:s");
	
	echo ln;
	
	$dt = new DateTime("now", new DateTimeZone(date_default_timezone_get()));
	echo "Date: " . $dt->format("Y-m-d h:i:s");
	
	echo ln;
	
	$dtz = new DateTimeZone(date_default_timezone_get());
	
	$past = new DateTime("2009-02-12 16:42:33", $dtz);
	$current = new DateTime("now", $dtz);
	
	$diff = $past->diff($current);
	
	$pastString = $past->format("Y-m-d");
	$currentString = $current->format("Y-m-d");
	$diffString = $diff->format("%yy %mm, %dd");
	
	echo "Difference between {$pastString} and {$currentString} is {$diffString}.";
	?>