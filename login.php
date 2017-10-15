
<hgroup>
  <h1>SPLITPAY</h1>
  <h2>LOGIN</h2>
</hgroup>
<head>
<link href="login.css" type="text/css" rel="stylesheet">
</head>


 <form action="login.php" method="POST" >
  <div class="group">
    <input type="email" name="email" placeholder="Email"><span class="highlight"></span><span class="bar"></span>
    <label></label>
  </div>
  <div class="group">
    <input type="password" name="password" placeholder="Password"><span class="highlight"></span><span class="bar"></span>
    <label></label>
    <br/>
    <div class="gr">
     <a href="" class="pass-forgot">forgot your password?</a>
    </div>
  </div>
  


   
   <button
     type="submit" name="submit" class="button buttonBlue" >Login
    <div class="ripples buttonRipples"><span class="ripplesCircle"></span></div>
  </button>

  <a href="signup.php" class="button buttonBlue">SIGNUP</a>
   <!--  <button type="button" class="">sign up
    <div class="ripples buttonRipples"><span class="ripplesCircle"></span></div>
  </button> -->
</form>













<?php
 define('DB_HOST', 'localhost'); 
 define('DB_NAME', 'db1');
 define('DB_USER','root'); 
 define('DB_PASSWORD',''); 

    $con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die("Failed to connect to MySQL: " . mysql_error()); 
    


function login($con) {


                  $email = $_POST['email'];
                  $password = $_POST['password']; 

    
                  $count=0;
                  $query = mysqli_query($con,"SELECT * FROM signin WHERE email = '$email' AND password = '$password' ") or die(mysql_error()); 
                  $count=mysqli_num_rows($query);
 
         
         if( $count==1){


    
                    // set the user as connected and redirect him to a home page or something
                     $_SESSION["user_connected"] = true;
         
                     header("Location: http://localhost/web/home.html");
                       

                       }else{
 
                         
                          // wrong email or password?
                             echo "<script type='text/javascript'>\n";
                             echo "alert('enter valid UserName OR Password...');\n";
                             echo "</script>";
                             // redirect him to an error page
        
                             }
                    }

 if(isset($_POST['submit'])) {


                             // redirect him 
                                 login($con);
                              }
?>
