<?php 
session_start();
echo $_SESSION["name"];
if (!isset($_SESSION["name"])) {
header("location:login.php");
}

?>

<?php
          include("./css.php") 
          ?>
          
<br>
<a href="./updateData.php" class="btn btn-secondary my-2" >update</a> <br>
<form action="prosess.php" method="POST">
  <input type="submit" class="btn btn-primary" value="logout" name="logout">
</form>

<form action="prosess.php" method="POST">
  <input type="submit" class="btn btn-primary" value="remove_user" name="remove_user">

</form>
