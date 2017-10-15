<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>SPLITPAY</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Shoppy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<!--js-->
<script src="js/jquery-2.1.1.min.js"></script>
<!--icons-css-->
<link href="css/font-awesome.css" rel="stylesheet">
<!--Google Fonts-->
<link href='//fonts.googleapis.com/css?family=Carrois+Gothic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Work+Sans:400,500,600' rel='stylesheet' type='text/css'>
<!--//skycons-icons-->
</head>
<body>
<div class="page-container">
   <div class="left-content">
	   <div class="mother-grid-inner">
            <!--header start here-->
				<div class="header-main">
					<div class="header-left">
							<div class="logo-name">
									 <a href="home.html"> <h1>SPLITPAY</h1>
									<!--<img id="logo" src="" alt="Logo"/>-->
								  </a>
							</div>
							<!--search-box-->


							<div class="clearfix"> </div>
						 </div>
						 <div class="header-right">

							<div class="profile_details">
								<ul>
									<li class="dropdown profile_details_drop">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
											<div class="profile_img">
												<span class="prfil-img"></span>
												<div class="user-name">
													<p>USER</p>
													<span>Administrator</span>
												</div>
												<i class="fa fa-angle-down lnr"></i>
												<i class="fa fa-angle-up lnr"></i>
												<div class="clearfix"></div>
											</div>
										</a>
										<ul class="dropdown-menu drp-mnu">
											<li> <a href="#"><i class="fa fa-cog"></i> Settings</a> </li>
											<li> <a href="#"><i class="fa fa-user"></i> Profile</a> </li>
											<li> <a href="login.php"><i class="fa fa-sign-out"></i> Logout</a> </li>
										</ul>
									</li>
								</ul>
							</div>
							<div class="clearfix"> </div>
						</div>
				     <div class="clearfix"> </div>
				</div>
<!--heder end here-->
<!-- script-for sticky-nav -->
		<script>
		$(document).ready(function() {
			 var navoffeset=$(".header-main").offset().top;
			 $(window).scroll(function(){
				var scrollpos=$(window).scrollTop();
				if(scrollpos >=navoffeset){
					$(".header-main").addClass("fixed");
				}else{
					$(".header-main").removeClass("fixed");
				}
			 });

		});
		</script>
		<!-- /script-for sticky-nav -->
<!--inner block start here-->
<!--inner block start here-->
<div class="inner-block">
    <div class="blank">
<h2>VIEW EXPENSE</h2>

    		<b>ENTER USERNAME</b>
 <br/><br/>

 <div class="creategrp">

<form action="viewexpenser.php" method="POST" >

 <input type="text" name="grpnam" placeholder="USERNAME">
 <br/><br/>



   <input type="submit" name="create" class="btn btn-info"  value="VIEW"/>
 <br/><br/>



 <?php



  define('DB_HOST', 'localhost');
  define('DB_NAME', 'db3');
   define('DB_USER','root');
   define('DB_PASSWORD','');
    $con = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die("Failed to connect to MySQL: " . mysql_error()) ;
    $con1 = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,'db2') or die("Failed to connect to MySQL: " . mysql_error()) ;

       if(isset($_POST['create'])) {



         $querye = "SELECT user FROM users WHERE users.user='$name'" ;
         $result = mysqli_query ($con,$querye);
         $count = mysqli_num_rows($result);
         if($count==1)
         {
           $querye = "SELECT name,amt FROM $name ";
           $result = mysqli_query ($con,$querye) or die("III");
           while($row= mysqli_fetch_assoc($result))
           {
             $x=$row['name'];
             $quere = "SELECT user FROM users WHERE users.user='$x'" ;
             $resut = mysqli_query ($con1,$quere);
             $cont = mysqli_num_rows($resut);
             if($cont==1)
             {
               $queye = "SELECT name,amt FROM $x WHERE $x.name = '$name'";
               $reslt = mysqli_query ($con,$queye) or die("III");
               while($row1= mysqli_fetch_assoc($reslt))
               {
                 $nam=$row1['name'];
                  $z=$row['amt'];
                  $y=$row1['amt'];
                  if($z>$y)
                  {
                    $d=$z-$y;
                    $qurye ="UPDATE $name SET amt='$d' WHERE $name.name='$x'";
                    mysqli_query ($con,$qurye) or die("Fail1");
                    $qrye ="UPDATE $name SET amt='0' WHERE $name.name='$x'";
                    mysqli_query ($con1,$qrye) or die("Fail2");

                  }
                  else if($z<$y)
                  {
                    $d=$y-$z;
                    $qurye ="UPDATE $name SET amt='$d' WHERE $name.name='$x'";
                    mysqli_query ($con1,$qurye) or die("Failq");
                    $qrye ="UPDATE $name SET amt='0' WHERE $name.name='$x'";
                    mysqli_query ($con,$qrye) or die("Fail23");

                  }
                  else {
                  $qurye ="UPDATE $name SET amt='0' WHERE $name.name='$x'";
                  mysqli_query ($con,$qrye) or die("Fail22");
                  $qrye ="UPDATE $name SET amt='0' WHERE $name.name='$x'";
                  mysqli_query ($con1,$qryer) or die("Fail11");
                  }

                }

              }

      }
      }
      }







         echo"<p>DEBTS OWED</p><br></br>";
      NewUser($con);
          echo"<br></br><p>DEBTS OWNED</p><br></br>";
      NewUser($con1);
       }
       function NewUser($con)
      {
        $a=0;
        $b=0;
        $grp= $_POST['grpnam'];
       $querye = "SELECT name,amt,gr FROM $grp" ;
       $result = mysqli_query ($con,$querye);
       echo"<table border='2'>";

       if($result)
       {


       while($row= mysqli_fetch_assoc($result))
       {

         $amt=$row['amt'];
         if($amt>0)
         {
           $a=1;
           if($b==0)
           {
             echo"
             <tr><td>user</td><td>amount</td><td>group</td><tr>";
             $b++;
           }

         echo"<tr><td>{$row['name']}</td><td>{$row['amt']}</td><td>{$row['gr']}</td><tr>";
       }

       }

       echo"</table>";
        }
        else {

          echo"NO DEBTS OWNED";
        }
        if($a==0)
        {

          echo"NO DEBTS OWNED";
        }
      }
   ?>
  </div>
  </form>
  </div>
  </div>



<!--inner block end here-->
<!--copy rights start here-->
<div class="copyrights">

</div>
<!--COPY rights end here-->
</div>
</div>
<!--slider menu-->

    <div class="sidebar-menu">
		  	<div class="logo"> <a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="#"> <span id="logo" ></span>
			      <!--<img id="logo" src="" alt="Logo"/>-->
			  </a> </div>
		    <div class="menu">
		      <ul id="menu" >
		        <li id="menu-home" ><a href="home.html"><i class="fa fa-tachometer"></i><span>HOME</span></a>
		        </li>
		        <li><a href="#"><i class="fa fa-cogs"></i><span>GROUPS</span><span class="fa fa-angle-right" style="float: right"></span></a>

		          <ul>
		          	 <li><a href="viewgroup.php">VIEW GROUP</a></li>
		            <li><a href="editgrp.php">EDIT GROUP</a></li>
		          </ul>
		        </li>
		        <li id="menu-comunicacao" ><a href="creategrp.php"><i class="fa fa-book nav_icon"></i><span>CREATE GROUP</span></span></a></li>
		         <li id="menu-academico" ><a href="add.php"><i class="fa fa-file-text"></i><span>ADD BILLS</span></a>
		         </li>
		      </ul>
		    </div>
	 </div>



	<div class="clearfix"> </div>
</div>
<!--slide bar menu end here-->
<script>
var toggle = true;

$(".sidebar-icon").click(function() {
  if (toggle)
  {
    $(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
    $("#menu span").css({"position":"absolute"});
  }
  else
  {
    $(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
    setTimeout(function() {
      $("#menu span").css({"position":"relative"});
    }, 400);
  }
                toggle = !toggle;
            });
</script>
<!--scrolling js-->
		<script src="js/jquery.nicescroll.js"></script>
		<script src="js/scripts.js"></script>
		<!--//scrolling js-->
<script src="js/bootstrap.js"> </script>
<!-- mother grid end here-->
</body>
</html>
