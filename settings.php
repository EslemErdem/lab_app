<?php
 $conn=@mysqli_connect("localhost","root","");
if ($conn)
{
echo "Connected to mysql server. <br>";
$choose=@mysqli_select_db($conn,"student");
if ($choose)
{
echo "Student database selected. <br>";
mysqli_query($conn, "SET NAMES UTF8");
}
else
echo "database not selected.";
}
else
echo "Cannot connect to MySQL Server. ";
?>