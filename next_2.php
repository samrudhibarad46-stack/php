<?php
	session_start();
	echo 'welcome to out site:'.$_SESSION['user'];
	echo "<a href='logout.php'>logout</a>";
?>