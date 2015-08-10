<?php
	$processor = new XSLTProcessor();
	
	$xml = new DOMDocument;
	$xml->load($filename);
	
	$xsl = new DOMDocument;
	$xsl->load($filename);
	
	$processor->importStylesheet($xsl);
	
	$result = $processor->transformToXml($xml);
?>