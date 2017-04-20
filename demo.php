<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>
  <?php 
    if (isset($_GET['album'])) {
	  echo $_GET['album'];
	} else {
		
	  echo 'Photo Gallery';
	}
  ?>
</title>
<link rel="stylesheet" type="text/css" href="colorbox/colorbox.css" />
<link rel="stylesheet" type="text/css" href="css/folio-gallery.css" />
<link rel="stylesheet" type="text/css" href="css/style.css">

<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>



<script type="text/javascript" src="colorbox/jquery.colorbox-min.js"></script>

<script type="text/javascript">
$(document).ready(function() {	
	
	// colorbox settings
	$(".albumpix").colorbox({rel:'albumpix'});
	
	// fancy box settings
	/*
	$("a.albumpix").fancybox({
		'autoScale	'		: true, 
		'hideOnOverlayClick': true,
		'hideOnContentClick': true
	});
	*/
});
</script>
<!-- end gallery header -->
</head>
<body>
<div class="gallery">  
  <?php include "folio-gallery.php";?>
  
</div>  
<div id="wrap">
<div id="header"><img src="images/header.png" width="653" height="156" alt="Soccer"/></div>
<table>
<tr>
<td>
<div id="nav"><br/>
<a href="index.php">Home</a><br/>
<a href="show.php">Teams</a><br/>
<a href="new.php">Add New Team</a><br/>
<a href="delete.php">Delete Team</a><br/>
<a href="modify.php">Modify Team</a><br/>
<a href="demo.php">Gallery</a><br/>
<a href="upload.php">Upload Picture</a><br/>
<a href="showStat.php">Statistics</a><br/>
<a href="login.php">Log In</a><br/>
<a href="logout.php">Log Out</a>
</div>
</td>
<td>
<div id="content">
 
</div>
</td>
</tr>
</table>
<div id="footer"></div>
</div>
</body>
</html>