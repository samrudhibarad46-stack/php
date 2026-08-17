<?php
	session_start();
	echo "bye...bye..".$_SESSION['user'];
	session_destroy();
?>