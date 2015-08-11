<?php

	include_once 'func_template.php';

	$bindings['DESTINATION'] = $_SERVER['PHP_SELF'];
	$name = $_GET['name'];
	
	if(!empty($name)) {
		//do something
		$template = "PHP_Exercises/Thankyou.template";
		$bindings['NAME'] = $name;
	}
	else {
		$bindings['NAME'] = $name;
		$template = "PHP_Exercises/user.template";
	}
	
	echo fillTemplate($template, $bindings);
?>