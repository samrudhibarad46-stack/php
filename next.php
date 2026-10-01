<?php
$con=mysqli_connect('localhost','root','','e1');
if(!$con)
{
	echo "Connection Fail..!".mysqli_connect_errno();
}
else
{
	echo "Cnnected successfully..!";
}
?>