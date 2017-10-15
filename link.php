<?php

define('DB_HOST', 'localhost');
define('DB_NAME', 'db1');
 define('DB_USER','root');
 define('DB_PASSWORD','');
  $con = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die("Failed to connect to MySQL: " . mysql_error()) ;
  $grpname=$_POST['grpnam'];
  $aname = $_POST['admn'];
  $email1 = $_POST['adm'];




          $query = "CREATE TABLE $grpname ( id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY , email1 VARCHAR(50) , name VARCHAR(50))";

         $data = mysqli_query ($con,$query) or die("Fail");
          if($data) {

            echo "Group Created";
            add($con,$grpname,$email1,$aname);
             }
             else
            {
                  echo "Group Name already Exists";

            }

            function add($con,$grpname,$email1,$aname){

             $query = "INSERT INTO $grpname (email1,name) VALUES ('$email1', '$aname')";
                     $data = mysqli_query ($con,$query) or die("Fail2");
                      if($data) {

                         echo "ADMIN ADDED";

                       //echo "YOUR REGISTRATION IS COMPLETED...";
                       }
                       else
                       {
                          echo "Enter Correct Admin Name and Email";

            }

          }
?>
