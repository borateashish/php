<?php
session_start();
echo "<fieldset>";
echo "<h1><center>Customer Invoice</center></h1>";
$b = $_POST["t5"];
$c = $_POST["t6"];
echo "<br><b>Customer Details </b><br>";
echo "Customer Name : ".$_SESSION["cnm"]."<br>";
echo "Customer Address : ".$_SESSION["add"]."<br>";
echo "Customer Mobile No : ".$_SESSION["mob"]."<br>";
echo "<br><b>Product Details </b><br>";
echo "Product Name :".$_POST["t4"]."<br>";
echo "Quantity of Product :".$_POST["t5"]."<br>";
echo "Rate of Product :".$_POST["t6"]."<br>";
$total = $b*$c;
echo "Total Amount : ".$total;
echo "</fieldset>";
?>