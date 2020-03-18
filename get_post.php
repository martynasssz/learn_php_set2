<?php
	#SUPER GLOBAL $_GET, $_POST, $REQUEST, $_SERVER['QUERY_STRING']

	
	if(isset($_GET['name'])){ //data send through the URL
	 //nepatikrinus isset funcija, mes klaida, kad kintamasis neapibreztas, subit nezino, kokie duomenis bus siuciami
		//print_r($_GET);      //galima atsispausdinti masyva su duomenimis kurie perduodami
		//echo $_GET['email'];
		$name = htmlentities($_GET['name']);   
		//echo $name;

	 //htmlentities Input formose apsaugo nuo bottu, kai ivedamas javascrit i input lauka.Pakeicia elemento ženklus "<>" i kitokius simbolius, kad, negaletu submitinti formos i serveri.
	}
	/*
	if(isset($_POST['name'])){ //data send through the header
		//print_r($_POST);
		$name =htmlentities($_POST['name']);
		//echo $name;
	}
	
	if(isset($_REQUEST['name'])){ //work with get and post
		print_r($_REQUEST);
		$name =htmlentities($_REQUEST['name']);
		echo $name;
	}
	

	echo $_SERVER['QUERY_STRING']; //gauname visa info po klaustuko name=orlean&email=martynassss%40gmail.com
				//veikia su metodu GET.
	*/
?>


<!DOCTYPE html>
<html>
	<head>
		<title>My Website</title>
	</head>
<body>
	<form method="GET" action="get_post.php">
		<div>
			<label>Name</label><br>
			<input type="text" name="name">
		</div>
		<div>
			<label>Email</label><br>
			<input type="email" name="email">
		</div>
		<input type="submit" value="Submit">
	</form>
	<!--We can send URL itself without using form thought he form-->
	<ul>
			<li>
				<a href="get_post.php?name=Brad">Brad<a/>
			</li>
			<li>
				<a href="get_post.php?name=Steve">Steve<a/>
			</li>
	</ul>
	<h1><?php echo "{$name}'s Profile"; ?></h1>
</body>
</html>