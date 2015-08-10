<?php

	 function start_Element($parser, $name, &$attributes)
	{
		$outputAtrributes = array();
		
		if(count($attributes)) {
			foreach($attributes as $key) {
				$value = $attributes[$key];
				$outputAtrributes[] = "<font color=\"gray\"{$key}=\"{$value}\"</font>";
			}
		}
		
		echo "&lt;<b>{$name}</b> " . join(' ', $outputAtrributes) . "&gt;";
	}
	
	function endElement($parser, $name)
	{
		echo "&lt;<b>/{$name}</b>&gt;";
	}
	
?>