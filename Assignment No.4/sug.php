<?php
	$n=$_GET['n'];
	$a=array();
	$a[]="Atharva";
	$a[]="Shruti";
	$a[]="Aditi";
	$a[]="Savnee";
	$a[]="Isha";
	echo "List of Names=<br>";
	foreach($a as $v)
	{
		$s=substr($v,0,strlen($n));
		if($s===$n)
		echo "$v<br>";
	}
?>
