<?php
$a=$_GET["v1"];
$b=$_GET["v2"];

if(isset($_GET["sbt1"]))
{
	echo "addition of $a and $b is ".($a+$b);
}
elseif(isset($_GET["sbt2"]))
{
	echo "substraction of $a and $b is ".($a-$b);
}
elseif(isset($_GET["sbt3"]))
{
	echo "divition of $a and $b is ".($a/$b);
}
else
{
	echo "multiplication of $a and $b is ".($a*$b);
}
?>