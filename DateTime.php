<?php
	try {
		
	//ini_get('date.timezone') not working
	$tz = date_default_timezone_get();
	$dtz = new DateTimeZone($tz);
	
	echo "Server's Time Zone: {$tz} <br/>";
	
	foreach ($dtz->getLocation() as $key => $value) {
		echo "{$key} {$value} <br/>";
	}
	}
	catch(Exception $e)
	{
		echo $e->getMessage();
	}
	
	?>