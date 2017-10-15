<?php

define('DB_HOST', 'localhost');
define('DB_NAME', 'db1');
 define('DB_USER','root');
 define('DB_PASSWORD','');
  $con = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die("Failed to connect to MySQL: " . mysql_error()) ;


    $grpname = $_POST['grpname'];
        $email1 = $_POST['email1'];
        $aname= $_POST['usern'];

   $query = "INSERT INTO $grpname (email1,name) VALUES ('$email1','$aname')";
           $data = mysqli_query ($con,$query);
            if($data) {

               echo "USER ADDED TO GROUP";
             //echo "USER ADDED";
             }
             else
             {
                echo "USER ALREADY EXISTS";
  }
  ?>
