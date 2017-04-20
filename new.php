<?php include("includes/header.php");?>
<?php

          if(!isset($_SESSION['user_session'])){
            echo('Първо трябва да влезете от <a href="login.php">тук</a>');
            exit();
          } 
		  require_once('Connections/localhost.php');
?>
  <div id="show">
      <table id="show" width="350" border="0" cellpadding="3" cellspacing="1" bgcolor="green">
      <form name="form1" method="post" action="insert.php">
          <tr>
            <td width="120">Name</td>
            <td width="280"><input  name="name" type="text" id="name"></td>
          </tr>
          <tr>
            <td width="78">City</td>
            <td width="294"><input  name="city" type="text" id="city"></td>
          </tr>
          <tr>
            <td width="120">Year of Foundation</td>
            <td width="280"> <input name="year" type="text" ></td>
          </tr>
      
          <tr>
            <td>&nbsp;</td>
            <td><input type="submit" name="Submit" value="Submit"></td>
          </tr>
          </form>
          </table>      
    </div>
<?php include("includes/footer.php");?>