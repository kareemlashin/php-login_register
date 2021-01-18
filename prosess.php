<?php
    
    include_once("./config.php");
    if (isset($_POST['register'])) {
              $all= config::concoct();
              $name  = $_POST["name"];
              $email = $_POST["Email"];
              $pass  = $_POST["Password"];
              $q="INSERT INTO `login` (`id`,`user_name`, `user_email`,`password`) VALUES (null,'$name','$email','$pass')";
              $all->exec($q);
              header("location:login.php");

}
function checkLogin($Email,$Password) {

          $all= config::concoct();
          $q = $all->prepare("
          SELECT * FROM `login` WHERE user_email=:forename and  password=:forPassword
          ");

          $q->bindValue(':forename', $Email);
          $q->bindValue(':forPassword', $Password);
          $q->execute();

          if ($q->rowCount() > 0){
          $check = $q->fetch(PDO::FETCH_ASSOC);
          $row_id = $check;
          return $row_id;
          }else{
                    echo "confirm";
          }

}

if(isset($_POST['login'])){

         if(checkLogin($_POST["Email"],$_POST["Password"])){
          $data =checkLogin($_POST["Email"],$_POST["Password"]);
          session_start();
           $_SESSION["name"]=$data["user_name"];
          header("location:profile.php");

         }

}

if(isset($_POST['logout'])){
session_start();
session_unset();
session_destroy();
          header("location:login.php");

}
if(isset($_POST['remove_user'])){
          $all= config::concoct();
          session_start();
           $get_user=$_SESSION["name"];
           $all= config::concoct();
          $q = $all->prepare("
          DELETE FROM `login` WHERE  user_name=:forename
          ");

          $q->bindValue(':forename', $get_user);
          $q->execute();

session_unset();
session_destroy();
header("location:register.php");

}

if(isset($_POST['update'])){

           $name  = $_POST["name"];
           $email = $_POST["Email"];
           $pass  = $_POST["Password"];
          $all= config::concoct();
          session_start();
           $get_user=$_SESSION["name"];
           $all= config::concoct();
          $q = $all->prepare("
          SELECT * FROM `login` WHERE user_name=:forename
          ");

          $q->bindValue(':forename', $get_user);
          $q->execute();

          if ($q->rowCount() > 0){
          $check = $q->fetch(PDO::FETCH_ASSOC);
          $row_id = $check["id"];
          $update_query = $all->prepare("
            UPDATE `login` SET `user_name`=:name ,`user_email`=:email,`password`=:pass WHERE id =:forId
          ");

          $update_query->bindValue(':forId', $row_id);
          $update_query->bindValue(':name', $name);
          $update_query->bindValue(':email', $email);
          $update_query->bindValue(':pass', $pass);
          $update_query->execute();
          session_start();
          $_SESSION["name"]=$name;
          header("location:profile.php");

}else{
                    echo "confirm";
          }

}

?>