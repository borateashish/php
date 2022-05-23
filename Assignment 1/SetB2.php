<?php
session_start();
$_SESSION["eno"]=$_POST["t1"];
$_SESSION["enm"]=$_POST["t2"];
$_SESSION["add"]=$_POST["t3"];
echo"<br>HELLO ".$_SESSION["enm"]."FILL YOUR EARNING DETAILS";
echo"<form method=post action='SetB2display.php'>";
echo"Basic Salary :-><input type=text name=t4><br><br>";
echo"DA :-><input type=text name=t5><br><br>";
echo"HRA :-><input type=text name=t6><br><br>";
echo"<input type=submit value='DISPLAY'></form>";
?>
