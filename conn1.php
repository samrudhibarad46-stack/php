<?php 
$con=mysqli_connect("localhost","root","","e1");
if(!$con)
{
	echo "not connected";
}
else
{
	echo "conneted successfully<br>";
}
$sql="select * from student";
$result=mysqli_query($con,$sql);


/*
while($row=mysqli_fetch_assoc($result))
{
	echo $row['rollno']."-".$row['name']."-".$row['subject']."-".$row['mark']."<br>";
}
/*$data=mysqli_data_seek($result,2);
$row=mysqli_fetch_row($result);
echo "Resultset has $data rows";

/*$rowcount=mysqli_num_rows($result);
echo "Resultset has $rowcount rows";

/*while($row =mysqli_fetch_array($result))
{
  echo $row[0]."-".$row[1]."-".$row[2]."<br>";
}*/
?>