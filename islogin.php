
 <?php 
session_start();
if (isset($_SESSION["name"])) {
header("location:profile.php");
}
?>