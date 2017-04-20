<?php include("includes/header.php");?>
<?php
    error_reporting(E_ERROR | E_PARSE);
require_once('Connections/localhost.php');
$name=$_POST['name'];
$city=$_POST['city'];
$year=$_POST['year'];
if(!isset($name) || empty($name) || preg_match("/^[A-Za-z]{3,25}/",$name) || !isset($city) || empty($city) || preg_match("/^[A-Za-z]{3,25}/",$city) || !isset($year) || empty($year) || !is_numeric($year) || preg_match("/^[0-9]{4}/",$year))
{
echo ("Invalid Data!!!");
}
else
{
	$sql="INSERT INTO otbori (Ime, Grad, Godina_na_osnovavane) VALUES ('$name', '$city', $year);";
$result=mysql_query($sql) or die(mysql_error());
echo ("You added a team with:<br/> Name:".$name."<br/>City:".$city."<br/> Year:".$year);
}
?>
<?php include("includes/footer.php");?>