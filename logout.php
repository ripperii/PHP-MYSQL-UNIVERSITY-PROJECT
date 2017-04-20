<?php include("includes/header.php");?>
<?php
if(isset($_SESSION['user_session'])){
	echo 'Успешно излезнахте,'.$_SESSION['user_session'];
	unset($_SESSION['user_session']);
session_destroy();
}
else echo('Първо трябва да велзнете от <a href="login.php">тук</a> ');
?>
<?php include("includes/footer.php");?>