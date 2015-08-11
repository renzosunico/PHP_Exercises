<?php
	
	function log_roller($error, $erroString)
	{
		$file = '/var/log/php_errors.log';
	
		if(filesize($file) > 1024) {
			rename($file, $file . (string)time());
		}
		error_log($erroString, 3, $file);
	}
	
	set_error_handler('log_roller');
	
	for($i=0; $i<5000; $i++) {
		trigger_error(time() . ":Just an error ma'am.\n");
	}
	
	restore_error_handler();
	
	?>