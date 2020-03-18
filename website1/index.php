<?php
/*----skirtumai tarp include ir require------*/

/* jei pakeisime pavadinima <?php include 'inc/header1.php'; ?> mes klaida, taciau skricpa toliau vykdys.t.y. parodys taga h1 ir footer*/

/* jei pakeisime pavadinima <?php require 'inc/header1.php'; ?> mes klaida ir toliau nevykdys kodo*/

/* require_once ideda faila tik tuo atveju, jei pries tai tas failas nebuvo idetas, require ideda ta pati faila kiekviena karta.*/

?>


<?php include 'inc/header.php'; ?>
	<h1>Home</h1>
<?php include 'inc/footer.php'; ?>
	

<?php
/*

<?php require_once 'inc/header.php'; //iterps failo duomenis tik viena karta?>
<?php require_once 'inc/header.php'; ?>
	<h1>Home</h1>
<?php require_once 'inc/footer.php'; ?>

*/

?>

<?php
/*

<?php require 'inc/header.php'; //iterps du kartus to paties header failo duomenis.Tas pats su include?>
<?php require 'inc/header.php'; ?>
	<h1>Home</h1>
<?php require_once 'inc/footer.php'; ?>

*/

?>

	