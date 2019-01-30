<?php 
	include("config.php");
	$newEntry = "UPDATE users SET fname='fname2', lname='lname2', email='email2', username='username2',DOB='DOB2',password='password2' WHERE id='$id'";
	$tryEntry = mysqli_query($link,$newEntry) or die ('New Entry Failed. '.mysqli_error($link));
?>