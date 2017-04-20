<?php include("includes/header.php");?>
<?php
ob_start();
require_once('Connections/localhost.php');

// Define $myusername and $mypassword 
$myusername=$_POST['myusername']; 
$mypassword=$_POST['mypassword']; 
if(!isset($myusername) || empty($myusername) || !isset($mypassword) || empty($mypassword))
{
	echo("Invalid Username or Password");
	include("includes/footer.php");
	exit();
}
// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);
if(isset($_SESSION['user_session'])) {
	echo('Вече сте вътре, '.$_SESSION['user_session']);
	exit();
}
	
$sql="SELECT * FROM admin WHERE username='$myusername' and password='$mypassword'";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row

if($count==1){
// Register $myusername, $mypassword and redirect to file "login_success.php"
//session_register("myusername");
//session_register("mypassword"); 
$_SESSION['user_session']= $myusername;
header("location:login_success.php");
}
else {
echo "Грешно име или парола!";
}

ob_end_flush();
?>
<?php include("includes/footer.php");?>
