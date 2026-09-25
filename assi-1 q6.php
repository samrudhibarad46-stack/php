<?php
	$pamount=800;
	$flag=0;
	$damount=0;
	$pay=0;
	
if($pamount>=1600)
{
	$damount=$pamount*0.15;
}	
elseif($pamount>=800)
{
	$damount=$pamount*0.10;
}
elseif($pamount>=400)
{
	$damount=$pamount*0.5;
}
else
{
	echo "sorry..! we can't give you discount .. purchase more..!";
}
$pay=$pamount-$damount;

echo "purchase amount:".$pamount."<br>";
echo "discount amount:".$discount."<br>";
echo "payable amount:".$payable."<br>";