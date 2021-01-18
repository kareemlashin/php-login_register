<!DOCTYPE html>
<html lang="en">
<head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Document</title>
          <?php
          include("./css.php");
                    include_once("./islogin.php");

          ?>
          
</head>
<body>

          <div class="text-center my-5">
          
<a href="login.php" class="btn btn-dark mx-2 ">login</a>
          </div>

<form action="prosess.php" method="POST">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">name</label>
      <input type="text" class="form-control" name="name">
    </div>
     <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" name="Email">
    </div>
    
    <div class="form-group col-md-6">
      <label for="inputPassword4">Password</label>
      <input type="password" class="form-control" name="Password">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">confirm Password</label>
      <input type="password" class="form-control" id="confirmPassword">
    </div>
    
  </div>
  
  <input type="submit" class="btn btn-primary" value="register" name="register">
</form>

<?php
          include("./js.php") 
          ?>
          
</body>
</html>