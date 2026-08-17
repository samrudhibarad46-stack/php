<?php
	session_start();
	$unm=$_POST['uid'];
	$pwd=$_POST['pwd'];
	$_SESSION['user']=$unm;
	if($unm=='ram' && $pwd=='123')
	{
		header('location:next_2.php');
	}
	else
	{
		echo 'try again';
	}
?>