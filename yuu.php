<html>
<head>
<title>SPIT-PAY</title>
<body>
  <form  method="POST"  >
    <input type="text" name="name" id="name" placeholder="GROUP NAME"><br></br>
   <input type="text" name="cont" placeholder="ADD CONTRIBUTOR"><br></br>




    <input type="text" name="de" placeholder="ADD DEBTEE"><br></br>
    <input type="number" name="amount2" placeholder="AMOUNT "><br></br>
   <input type="submit" name="add1"  value="ADD BILL"/><br></br>
</form>

</body>
</html>

<?php

  define('DB_HOST', 'localhost');
  define('DB_NAME2', 'db3');
  define('DB_NAME1', 'db2');
  define('DB_NAME0', 'db1');
  define('DB_USER','root');
  define('DB_PASSWORD','');


  $con0 = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME0);
  $con1 = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME1);
  $con2 = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME2);
    function neew($con2)
   {
       $am= $_POST['amount2'];
       $con= $_POST['cont'];
       $gr= $_POST['name'];
       $deb= $_POST['de'];
     $querye = "SELECT user FROM users  WHERE users.user='$con'";
     $result = mysqli_query ($con2,$querye);



        $row= mysqli_num_rows($result);

     if($row==0)
     {
        $query = "INSERT INTO users (user) VALUES ('$con')";
        mysqli_query ($con2,$query)or die("FailII: " . mysql_error()) ;
        $query ="CREATE TABLE $con ( id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY ,amt FLOAT(10), gr VARCHAR(50) , name VARCHAR(50))";
        mysqli_query ($con2,$query)or die("Fail2: " . mysql_error()) ;
        NewUser($con2);
     }
     else {

       $querye = "SELECT name FROM $con  WHERE $con.name='$deb'";
       $result = mysqli_query ($con2,$querye)or die("FAIL@@");

       $row= mysqli_num_rows($result);


        if($row==0)
    {

        NewUser($con2);
    }

    else
      {
        $querye = "SELECT amt FROM $con  WHERE $con.name='$deb'";
        $result = mysqli_query ($con2,$querye);

         while($row= mysqli_fetch_assoc($result))
         {
           $x = $row['amt'];
           $y = $x+$am;
         }
           $querye ="UPDATE $con SET amt='$y'";
          mysqli_query ($con2,$querye) or die("Fail89");

        }


     }



      }





  function NewUser($con2) {

        $cont= $_POST['cont'];
        $deb= $_POST['de'];
        $am= $_POST['amount2'];
          $grp= $_POST['name'];
        $query = "INSERT INTO $cont (amt, gr, name) VALUES ('$am','$grp','$deb')";
          mysqli_query ($con2,$query)or die("Fail88: " . mysql_error()) ;
         }

            if(isset($_POST['add1'])) {
              $am= $_POST['amount2'];
             $cont= $_POST['cont'];
               $grp= $_POST['name'];
                 $deb= $_POST['de'];

                 $querye = "SELECT gname FROM groups  WHERE groups.gname='$grp'";
                 $result = mysqli_query ($con0,$querye) or die("II");
                 $count=mysqli_num_rows($result);
                 if($count==1)
                 {

              $querye = "SELECT name FROM $grp  WHERE $grp.name='$cont'";
              $result = mysqli_query ($con0,$querye) or die("II");
              $count=mysqli_num_rows($result);

              if($count==1)
              {


                $querye = "SELECT name FROM $grp  WHERE $grp.name='$deb'";
                $result = mysqli_query ($con0,$querye) or die("III");
                $count=mysqli_num_rows($result);
                if($count==1)
                {

              neew($con2);
              neew1($con1);
            }
            else {
                echo"<script>";
              echo"alert('ADD DEBTEE TO GROUP')";
                echo"</script>";
            }
          }
          else {
              echo"<script>";
            echo"  alert('ADD CONTRIBUTOR TO GROUP')";
              echo"</script>";
          }
        }
        else {
          echo"<script>";
              echo"  alert('GROUP DOESNT EXIST')";
                echo"</script>";
        }

}
            //echo "YOUR REGISTRATION IS COMPLETED...";

/////////////////////////////////////////////////////////
function neew1($con1)
{
   $am= $_POST['amount2'];
  $con= $_POST['cont'];
    $gr= $_POST['name'];
      $deb= $_POST['de'];
 $querye = "SELECT user FROM users  WHERE users.user='$deb'";
 $result = mysqli_query ($con1,$querye);



    $row= mysqli_num_rows($result);

 if($row==0)
 {
    $query = "INSERT INTO users (user) VALUES ('$deb')";
    mysqli_query ($con1,$query)or die("Fail: " . mysql_error()) ;
    $query ="CREATE TABLE $deb ( id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY ,amt FLOAT(10), gr VARCHAR(50) , name VARCHAR(50))";
    mysqli_query ($con1,$query)or die("Fail2: " . mysql_error()) ;
      NewUser1($con1);
 }
 else {

   $querye = "SELECT name FROM $deb  WHERE $deb.name='$con'";
   $result = mysqli_query ($con1,$querye);
   $row= mysqli_num_rows($result);


    if($row==0)
{
    NewUser1($con1);
}
else
  {
    $querye = "SELECT amt FROM $deb  WHERE $deb.name='$con'";
    $result = mysqli_query ($con1,$querye);

     while($row= mysqli_fetch_assoc($result))
     {
       $x = $row['amt'];
       $y = $x+$am;
     }
       $querye ="UPDATE $deb SET amt='$y'";
      mysqli_query ($con1,$querye) or die("Fail77");




 }



  }
}




function NewUser1($con1) {
    $grp= $_POST['name'];
    $cont= $_POST['cont'];
    $deb= $_POST['de'];
    $am= $_POST['amount2'];
    $query = "INSERT INTO $deb (amt, gr, name) VALUES ('$am','$grp','$cont')";
      mysqli_query ($con1,$query)or die("Fail79: " . mysql_error()) ;
     }















            ?>
