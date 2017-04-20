<?php include("includes/header.php");?>
        <?php  if(!isset($_SESSION['user_session'])){
            echo('Първо трябва да влезете от <a href="login.php">тук</a>');
            exit();
          } ?>
<div id="show">
<form enctype="multipart/form-data" action="upl.php" method="post">
  <input type="hidden" name="MAX_FILE_SIZE" value="1000000">
  Upload this file: <input name="userfile" type="file">
  <input type="submit" value="Send File">
</form>
</div>
<?php include("includes/footer.php");?>