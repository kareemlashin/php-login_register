<?php 
class config{
         public static function concoct() {
                   
          $dsn         = "mysql:host=localhost;dbname=login_register";
          $user        = "root";
          $pass        = "";
          
          $option      = array(
          PDO::MYSQL_ATTR_INIT_COMMAND=>'SET NAMES UTF8',
          );
                   try {
                    
                    $CONNECT= new PDO($dsn,$user,$pass,$option);
          $CONNECT->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

                   } catch (PDOException $EX) {
                   echo "CONFECTION FAIL" . $EX->getMessage();
                    }
          
                    return $CONNECT;

         } 
}


?>