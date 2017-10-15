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

$grp = $_POST["grp"];
$cont = $_POST["cont"];
$querye = "SELECT name FROM $grp  WHERE $grp.name='$cont'";
$result = mysqli_query ($con0,$querye) or die("II");
$count=mysqli_num_rows($result);
if($count==1)
{


$number = count($_POST["name"]);
if($number > 0)
{
     for($i=0; $i<$number; $i++)
     {



          if(trim($_POST["name"][$i] != ''))
          {
            $name=$_POST["name"][$i];
            $cont = $_POST["cont"];
            $at = $_POST["amount2"];
            $amt=$at/$number;
            $querye = "SELECT name FROM $grp  WHERE $grp.name='$name'";
            $result = mysqli_query ($con0,$querye) or die("III");
            $count=mysqli_num_rows($result);
            if($count==1)
            {

            neew($con2,$cont,$amt,$name,$grp);
            neew1($con1,$cont,$amt,$name,$grp);
            echo "BILL ADDED";
          }
          else
          {
               echo "ADD DEBTEE TO THE GROUP";
          }


   }


}
}



}
else
  {
    echo "ADD CONTRIBUTOR TO THE GROUP";
  }

function neew($con2,$cont,$amt,$name,$grp)
{

    $con= $cont;
    $gr= $_POST['name'];
    $deb= $name;
 $querye = "SELECT user FROM users  WHERE users.user='$con'";
 $result = mysqli_query ($con2,$querye);



    $row= mysqli_num_rows($result);

 if($row==0)
 {
    $query = "INSERT INTO users (user) VALUES ('$con')";
    mysqli_query ($con2,$query)or die("Fail1: " . mysql_error()) ;
    $quer = "CREATE TABLE $con ( id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY ,amt FLOAT(10), gr VARCHAR(50) , name VARCHAR(50))";
    mysqli_query ($con2,$quer)or die("Fail2: " . mysql_error()) ;
    NewUser($con2,$cont,$amt,$name,$grp);
 }
 else {

   $querye = "SELECT name FROM $con  WHERE $con.name='$deb'";
   $result = mysqli_query ($con2,$querye);

   $row= mysqli_num_rows($result);


    if($row==0)
{

    NewUser($con2,$cont,$amt,$name,$grp);
}

else
  {
    $querye = "SELECT amt FROM $con  WHERE $con.name='$deb'";
    $result = mysqli_query ($con2,$querye);

     while($row= mysqli_fetch_assoc($result))
     {
       $x = $row['amt'];
       $y = $x+$amt;
     }
       $querye ="UPDATE $con SET amt='$y'";
      mysqli_query ($con2,$querye) or die("Fail3");

    }


 }



  }





function NewUser($con2,$cont,$amt,$name,$grp) {


    $deb= $name;
    $am= $amt;
    $query = "INSERT INTO $cont (amt, gr, name) VALUES ('$am','$grp','$deb')";
      mysqli_query ($con2,$query)or die("Fail7: " . mysql_error()) ;
     }



        //echo "YOUR REGISTRATION IS COMPLETED...";

/////////////////////////////////////////////////////////
function neew1($con1,$cont,$amt,$name,$grp)
{
$am= $amt;
$con= $cont;
$gr= $_POST['name'];
  $deb= $name;
$querye = "SELECT user FROM users  WHERE users.user='$deb'";
$result = mysqli_query ($con1,$querye);



$row= mysqli_num_rows($result);

if($row==0)
{
$query = "INSERT INTO users (user) VALUES ('$deb')";
mysqli_query ($con1,$query)or die("Fail10: " . mysql_error()) ;
$query = "CREATE TABLE $deb ( id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY ,amt FLOAT(10), gr VARCHAR(50) , name VARCHAR(50))";
mysqli_query ($con1,$query)or die("Fail14: " . mysql_error()) ;
  NewUser1($con1,$cont,$amt,$name,$grp);
}
else {

$querye = "SELECT name FROM $deb  WHERE $deb.name='$con'";
$result = mysqli_query ($con1,$querye);
$row= mysqli_num_rows($result);


if($row==0)
{
NewUser1($con1,$cont,$amt,$name,$grp);
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
  mysqli_query ($con1,$querye) or die("Fail");




}



}
}




function NewUser1($con1,$cont,$amt,$name,$grp) {


$deb= $name;
$am= $amt;
$query = "INSERT INTO $deb (amt, gr, name) VALUES ('$am','$grp','$cont')";
  mysqli_query ($con1,$query)or die("Fail: " . mysql_error()) ;
 }


?>
