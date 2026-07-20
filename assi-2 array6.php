<?php
$marks=array("bipin" =>array("maths" => 45,"physics" => 40,"chemistry" => 48),
			"ravi" =>array("maths" => 40,"physics" => 40,"chemistry" => 40),
			"amit" =>array("maths" => 50,"physics" => 45,"chemistry" => 48));
	
echo"marks for bipin in maths:";
echo $marks["bipin"]["maths"]."<br>";
echo"marks for ravi in physics:";
echo $marks["ravi"]["physics"]."<br>";
echo"marks for amit in chemistry:";
echo $marks["amit"]["chemistry"]."<br>";
echo"<pre>";
print_r($marks);			
?>