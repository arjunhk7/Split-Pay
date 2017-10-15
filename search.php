
 <?php
 define('DB_NAME', 'pincode');
 define('DB_HOST', 'localhost');
 define('DB_USER','root');
 define('DB_PASSWORD','');
$con = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die("Failed to connect to MySQL: " . mysql_error()) ;
if(isset($_POST['userid']))
{
    $cty = $_POST['userid'];



$query = "SELECT Officename, Pincode FROM db WHERE District = '$cty'";
$result = mysqli_query($con, $query);
$arr = array();
if(mysqli_num_rows($result) > 0)
{
     while($row = mysqli_fetch_array($result))
     {
       $temp['Officename'] = $row['Officename'];
       $temp['Pincode'] = $row['Pincode'];

          array_push($arr,$temp);
     }
     header('Content-Type: application/json');
     echo json_encode($arr);
}
else
{
     $output .= '<li>District Not Found</li>';
}
//$output .= '</ul>';
//echo $output;
}
//if(isset($_POST['create'])) {
  //$cty = $_POST["co"];
  //$query = "SELECT Officename, Pincode FROM db WHERE District = '$cty'";
  //$result = mysqli_query($con, $query);
  //echo"<table>";

  //if($result)
  //{


  //while($row= mysqli_fetch_assoc($result))
  //{


    //echo"<tr><td>{$row['Officename']}</td><td>{$row['Pincode']}</td><tr><br />\n";
  //}

  //echo"</table>";
//}
//}
?>
