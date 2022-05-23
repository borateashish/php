<?php
session_start();
$nm=$_POST["unm"];
$ps=$_POST["pas"];
if($nm=="Webt" && $ps=="12345")
{
echo"Welcome".$nm;
}
else
{
if($_SESSION['cnt']==3)
{
echo"ERROR FAILED TO LOGIN";
$_SESSION['cnt']=0;
}
else if($_SESSION['cnt']<3)
{
echo"TRY AGAIN".$_SESSION['cnt'];
$_SESSION['cnt']=$_SESSION['cnt']+1;
}
} ?>