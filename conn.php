<?php
$con=mysqli_connect('localhost','root','','e1');
if(!$con)
{
	echo 'Not Connected'.mysqli_connect_error();
}
else
{
	echo 'Connencted Successfully';
}
$sql="insert into student 
	 values(1,'samrudhi','php',40)";
if(mysqli_query($con,$sql))
{
	echo '<br>Record inserted';
}
else
{
	echo '<br>Recored not inserted'.mysqli_error($con);
}
?>