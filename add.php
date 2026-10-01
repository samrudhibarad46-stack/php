<?php
$name=$_POST['nm'];
$city=$_POST['ct'];
$brd=$_POST['brd'];

include "next.php";

$sql="insert into student(name,city,brd)
	   values('$name','$city','$brd')";
if(mysqli_query($con,$sql))
{
	echo "<br><br>Record inserted..!";
}
else
{
	echo "<br>Record not inserted..!".mysqli_error();
}
echo "<br><br>";
echo "<table border=1>";
echo "<tr>
		<th>rollno</th>
		<th>name</th>
		<th>city</th>
		<th>brd</th>
	</tr>";
$sql='select * from student';
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result))
{
		echo"<tr>
				<td>$row[0]</td>
				<td>$row[1]</td>
				<td>$row[2]</td>
				<td>$row[3]</td>
			</tr>";
}
echo "</table>";
mysqli_free_result($result);
mysqli_close($con);
echo "<br><br>";
echo "<a href='first.php'>Insert More Records</a>";
?>