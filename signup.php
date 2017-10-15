<html>
<head>
  <link rel="stylesheet" type="text/css" href="css/signup.css">
</head>
<div id="login-box">
  <div class="left">
    <h1>Sign up</h1>
    <form action="signup.php" method="POST" >
    <input type="text" name="name" placeholder="Name" />
   <input class="email" type="email"  name="email" placeholder="E-mail" />
    <input type="password" name="pass" placeholder="Password" />
    <input type="password" name="conpass" placeholder="Retype password"/>


    <input type="submit" name="signup_submit" value="Sign me up" />
    </form>
  </div>

  <div class="right">
    <span class="loginwith">Sign in with<br />social network</span>

    <button class="social-signin facebook">Log in with facebook</button>
    <button class="social-signin twitter">Log in with Twitter</button>
<a href="index.php"
    <button class="social-signin google">Log in with Google+
  </a>
    </button>
  </div>
  <div class="or">OR</div>
</div>
</html>




<?php
 define('DB_HOST', 'localhost');
 define('DB_NAME', 'db1');
  define('DB_USER','root');
  define('DB_PASSWORD','');
   $con = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die("Failed to connect to MySQL: " . mysql_error()) ;

  function NewUser($con) {
        $name = $_POST['name'];
         $email = $_POST['email'];
         $password = $_POST['pass'];
         $conpassword = $_POST['conpass'];
          if($password==$conpassword){
           $query = "INSERT INTO signin (name,email,password,conpassword) VALUES ('$name','$email','$password','$conpassword')";
          $data = mysqli_query ($con,$query);
           if($data) {

              echo "<script type='text/javascript'>\n";
               echo "alert('YOUR REGISTRATION IS COMPLETED...');\n";
                echo "</script>";
            //echo "YOUR REGISTRATION IS COMPLETED...";
            }
            else
            {
               echo "<script type='text/javascript'>\n";
               echo "alert(' error registerch ');\n";
                echo "</script>";
            }
          }else{
            echo "<script type='text/javascript'>\n";
               echo "alert(' password did not match ');\n";
                echo "</script>";
          }


  }
  function SignUp($con) {

      if(!empty($_POST['name'])) //checking the 'user' name which is from Sign-Up.html, is it empty or have some text
      {
        $count=0;
        $query = mysqli_query($con,"SELECT * FROM signin WHERE name = '$_POST[name]' AND email = '$_POST[email]'") or die(mysql_error());
        $count=mysqli_num_rows($query);

        if ($count==0) {

          NewUser($con);
           } else
           {

             echo "<script type='text/javascript'>\n";
           echo "alert('SORRY...YOU ARE ALREADY REGISTERED USER...');\n";
            echo "</script>";
            //echo "SORRY...YOU ARE ALREADY REGISTERED USER...";
             }
      }
      else
      {

         echo "<script type='text/javascript'>\n";
               echo "alert(' plkjhgfdsz ');\n";
                echo "</script>";
      }
  }
  if(isset($_POST['signup_submit'])) {
  SignUp($con);
  }


            ?>
