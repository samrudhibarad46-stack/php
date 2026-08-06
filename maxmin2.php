<?php
$a=$_GET["v1"];
$b=$_GET["v2"];
$c=$_GET["v3"];

if(isset($_GET["sbt1"]))
{
    if($a>$b)
    {
        echo "$a is bigger"."<br>";
    }
    elseif($c>$b)
   {
        echo "$c is bigger"."<br>";
    }
    else
    {
        echo "$b is bigger"."<br>";
    }
}
else
{
    if($a>$b)
    {
	echo "$a is bigger"."<br>";
    }

elseif($c<$b)
{
   
	echo "$c is bigger"."<br>";
}
else
{
    echo "$b is smaller";
}
}
?>