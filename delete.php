<?php include("includes/header.php");?>
<?php
          if(!isset($_SESSION['user_session'])){
            echo('Първо трябва да влезете от <a href="login.php">тук</a>');
            exit();
          } 
?>
<table id="show" width="500" border="0" cellpadding="3" cellspacing="1">
<tr>
<td align="center" bgcolor="green"><strong>Ime</strong></td>
<td align="center" bgcolor="green"><strong>Grad</strong></td>
<td align="center" bgcolor="green"><strong>Godina na Osnovavane</strong></td>
<td align="center" bgcolor="green"><strong>Delete</strong></td>
</tr>
<form name="del" method="post" action="del.php">
<?php
require_once('Connections/localhost.php');

$sql="SELECT idOtbori,Ime, Grad, Godina_na_osnovavane 
FROM otbori";
$result=mysql_query($sql);    
$count=mysql_num_rows($result);
while($rows=mysql_fetch_array($result))
{

?>

<tr>
<td bgcolor="green"><?php echo $rows['Ime'];?></td>
<td bgcolor="green"><?php echo $rows['Grad'];?></td>
<td bgcolor="green"><?php echo $rows['Godina_na_osnovavane']; ?></td>
<td align="center" bgcolor="green"><input name="del[]" type="checkbox" id="del" value="
<?php echo $rows['idOtbori']; ?>"></td>
</tr>
<?php
}
?>
<tr>
<td colspan="5" align="center" bgcolor="Green">
<input name="submit" type="submit" id="delete" value="Delete"></td>
</tr>
</form>
</table>
<p id="errormsg"></p>
<script>
function submit(){
	document.getElementsByName("del").onsubmit = function()
	{
		if(document.getElementById("del").checked==false)
		{
			document.getElementById("errormsg").innerHTML = "Nothing Selected!!!";
			return false;
		}else{
			document.getElementById("errormsg").innerHTML = "";
			return true;
		}
	}
}
window.onload = function() { submit();}
</script>
<?php include("includes/footer.php");?>