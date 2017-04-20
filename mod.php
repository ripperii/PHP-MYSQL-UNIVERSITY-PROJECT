<?php include("includes/header.php");?>
<?php
    error_reporting(E_ERROR | E_PARSE);
require_once('Connections/localhost.php');
$name=$_POST['name'];
$city=$_POST['city'];
$year=$_POST['year'];
$id=$_POST['id'];
if(!isset($name) || empty($name) || preg_match("/^[A-Za-z]{3,25}/",$name) || !isset($city) || empty($city) || preg_match("/^[A-Za-z]{3,25}/",$city) || !isset($year) || empty($year) || !is_numeric($year) || preg_match("/^[0-9]{4}/",$year)){
echo ("Invalid Data!!!");
}
else
{
	
	$sql="UPDATE otbori SET Ime='$name', Grad='$city', Godina_na_osnovavane=$year WHERE idOtbori=$id;";
$result=mysql_query($sql) or die(mysql_error());
echo ("You modified the team to:<br/> Name:".$name."<br/>City:".$city."<br/> Year:".$year);
}
?>
<?php include("includes/footer.php");?>