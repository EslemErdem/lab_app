<?php
include "settings.php";
$sql="Select * from student";
$query=mysqli_query($conn, $sql);
while ($liste=mysqli_fetch_array($query))
{
    echo "<br>";
echo "full name: ".$liste["full_name"]."<br>";
echo "email: ".$liste["email"]."<br>";
echo "gender: ".$liste["gender"]."<br>";
echo "-------------------------------<br>";

}
?>