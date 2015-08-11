<?php

	$authorId = 'ktatroe';
	$url = "http://ecample.com/api/authors/{$authorId}";
	
	$ch = curl_init($url);
	curl_setopt($ch, CURLOPT_URL, $url);
	
	$reponse = curl_exec($ch);
	$resultinfo = curl_getinfo($ch);
	
	curl_close($ch);
	
	//decode the Json
	$authorJson = json_decode($response);
	$author = ResourceFactory::authorFromJson($authorJson);

?>