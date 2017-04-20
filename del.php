<?php include("includes/header.php");?>
<?php 
          if(!isset($_SESSION['user_session'])){
            echo('Първо трябва да влезете от <a href="login.php">тук</a>');
            exit();
          } 
require_once('Connections/localhost.php');
if(isset($_POST['del']))
{

$strSQL = "DELETE FROM otbori where 1 "; 

for($i=0;$i<count($_POST['del']);$i++)  
{  
if($_POST['del'][$i] != "")  
{   

$strSQL.=" and idOtbori = ".$_POST['del'][$i]." ";
 
@mysql_query($strSQL)  or die(mysql_error());
}  
}  
}else{echo("error");}
header("location:".$_SERVER['HTTP_REFERER']); //vru6ta predi6nata stranica
?>