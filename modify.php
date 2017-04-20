<?php include("includes/header.php");?>
<?php
		 if(!isset($_SESSION['user_session'])){
            echo('Първо трябва да влезете от <a href="login.php">тук</a>');
            exit();
          }
require_once('Connections/localhost.php');
          if(!isset($_SESSION['user_session'])){
            echo('Първо трябва да влезнете от <a href="login.php">тук</a>');
            exit();
          }
?>
<div id="show">
<table id="show" width="400" border="0" cellpadding="3" cellspacing="1" bgcolor="green">

<tr>

<td align="center" bgcolor="green"><strong>#</strong></td>
<td align="center" bgcolor="green"><strong>Name</strong></td>
<td align="center" bgcolor="green"><strong>Grad</strong></td>
<td align="center" bgcolor="green"><strong>Godina na Osnovavane</strong></td>
</tr>
<?php
$sql="SELECT * FROM otbori;"; 
$result=mysql_query($sql);
$count=mysql_num_rows($result);

while($rows=mysql_fetch_array($result)){     

?>
<tr>
<form name="form1" method="post" action="mod.php">
<td bgcolor="green" align="center"><?php echo $rows['idOtbori']; ?></td>
<input name="id" type="hidden" value="<?php echo $rows['idOtbori'];?>">
<td bgcolor="green"><input name="name" type="text" value="<?php echo $rows['Ime']; ?>"></td>
<td bgcolor="green"><input name="city" type="text" value="<?php echo $rows['Grad']; ?>"></td>
<td bgcolor="green"><input name="year" type="text" value="<?php echo $rows['Godina_na_osnovavane']; ?>"></td>
<td bgcolor="green"><input name="update" type="submit" value="update"></td>
</form>
</tr>


<?php
}

?>
</table>
</div>
<?php include("includes/footer.php");?>