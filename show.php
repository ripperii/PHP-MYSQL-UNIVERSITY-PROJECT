<?php include("includes/header.php");?>
<div id="txtHint">
<form id="search" action="#" method="get">
<label>City:</label>
<input name="search" type="text" onChange="showCity(this.value)" onBlur="showCity(this.value)" />
</form>
<table id="show" width="500" border="0" cellpadding="3" cellspacing="1">
<tr>

<td align="center" bgcolor="green"><strong>Ime</strong></td>
<td align="center" bgcolor="green"><strong>Grad</strong></td>
<td align="center" bgcolor="green"><strong>Godina na Osnovavane</strong></td>
<td align="center" bgcolor="green"><strong>Champion Cups</strong></td>
<td align="center" bgcolor="green"><strong>Bulgarian Cups</strong></td>
<td align="center" bgcolor="green"><strong>Bulgarian Super Cups</strong></td>
</tr>
<?php
require_once('Connections/localhost.php');
@$q = $_GET["search"];
if(!isset($q) || empty($q)){
$sql="SELECT Ime, Grad, Godina_na_osnovavane, ChampionsCup, BulgarianCup, BulgarianSupercup 
FROM otbori
JOIN titli
USING(idtitli)";
}else{
	$sql="SELECT Ime, Grad, Godina_na_osnovavane, ChampionsCup, BulgarianCup, BulgarianSupercup 
FROM otbori
JOIN titli
USING(idtitli)
WHERE Grad='$q';";
}
$result=mysql_query($sql);
$count=mysql_num_rows($result); 
while($rows=mysql_fetch_array($result)){ 

?>

<tr>
<td bgcolor="green"><?php echo $rows['Ime'];?></td>
<td bgcolor="green"><?php echo $rows['Grad'];?></td>
<td bgcolor="green"><?php echo $rows['Godina_na_osnovavane']; ?></td>
<td bgcolor="green"><?php echo $rows['ChampionsCup']; ?></td>
<td bgcolor="green"><?php echo $rows['BulgarianCup'];?></td>
<td bgcolor="green"><?php echo $rows['BulgarianSupercup'];?></td>
</tr>
<?php
}

?></table>
</div>
<?php include("includes/footer.php");?>