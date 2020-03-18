<?php
	# $_SERVER SUPERGLOBALS

	// Create Server Array
	$server =[
		'Host Server Name' => $_SERVER['SERVER_NAME'],//gauname localhost
		'Host Header' => $_SERVER['HTTP_HOST'], //gauname localhost
		'Server Software'=> $_SERVER['SERVER_SOFTWARE'],//gauname Apache/2.4.34 (Win32) OpenSSL/1.1.0i PHP/7.2.10
		'Document Root' => $_SERVER['DOCUMENT_ROOT'], // gauname C:/xampp/htdocs
		'Current Page' => $_SERVER['PHP_SELF'], // gauname kelia /Naujas_etapas/website2/server-info.php
		'Script Name' => $_SERVER['SCRIPT_NAME'], // gauname kelia /Naujas_etapas/website2/server-info.php
		'Absolute Path' => $_SERVER['SCRIPT_FILENAME'] // gauname pilna kelia C:/xampp/htdocs/Naujas_etapas/website2/server-info.php

	];

	//echo $server['Host Server Name'];
	//echo $server['Host Header'];
	//echo $server['Server Software']; // gauname info apie softa 

	
	//print_r($server);
	

	//Create Clint Array
	$client =[
		'Client System Info' => $_SERVER['HTTP_USER_AGENT'], //Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.132 Safari/537.36
		'Client IP' => $_SERVER['REMOTE_ADDR'], //gauname ::1, kadangi serveris lokalus
		'Remote Port' => $_SERVER['REMOTE_PORT'] //gauname 56965


	];

	//print_r($client);



?>