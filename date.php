<?php
	
	//Set time Zone
	//Lietuvos laikas ji reikia visada virsuje, kad po jo einantis laikas butu aktualus

	date_default_timezone_set('Europe/Vilnius');

	//echo date('d'); // Day (day now)       jei nenurodysime parametro mes klaida,   
	//echo date('m'); // Month (month now)
	//echo date('Y'); // Year (year now)
	//echo date('l');   // Day of the week (now) 

	//echo date('Y/m/d'); // gauname 2020/03/18
	//echo date('m/d/Y'); // galimas formatas
	//echo date('m-d-Y'); // galimas formatas

	echo date('h').'<br>'; // Hour (now)
	echo date('i').'<br>'; // Min (now)
	echo date('s').'<br>'; // Secconds (now)
	echo date('a').'<br>'; // AM or PM
	
	echo date('h:i:sa').'<br>'; //parodo visa laika 

	/*
	Unix timestamp is a long integercontaining the number of seconds between the Unix Epox (January 1 1970 00:00:00 GMT) and the time specified.
	*/

	$timestamp = mktime(10, 14, 54, 5, 31, 1983); //valandos, minutes, sekundes, menuo, diena, metai
	echo $timestamp.'<br>';

	//norint isvesti i suskaitoma formata:
	echo date('m/d/Y h:i:sa', $timestamp).'<br>';

	$timestamp2 = strtotime('7:00pm March 22 2016'); 
	$timestamp3 = strtotime('tomorrow');
	$timestamp4 = strtotime('next Sunday'); 
	$timestamp5 = strtotime('+2 Days');

	//echo timestamp2;
	echo date('m/d/Y h:i:sa', $timestamp2).'<br>'; // parodys 2016 kovo 22 d.
	echo date('m/d/Y h:i:sa', $timestamp3).'<br>'; // parodys rytojaus data
	echo date('m/d/Y h:i:sa', $timestamp4).'<br>'; // parodys data ateinanti sekmadieni
	echo date('m/d/Y h:i:sa', $timestamp5).'<br>'; // parodys data po dienu dienu

	//---- daugiau informacijos apie datas https://www.php.net/manual/en/function.date.php















?>