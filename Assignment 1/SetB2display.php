<?php
$a=$_POST["t4"];
$b=$_POST["t5"];
$c=$_POST["t6"];
session_start();
echo"<br><b>Employee Details<br>";
echo"Employee Name:".$_SESSION["enm"]."<Br>";
echo"Employee Address:".$_SESSION["add"]."<Br>";
$sum=$a+$b+$c;
echo"<br>TOTAL EARNING:".$sum;
?>
