
<!DOCTYPE HTML>
<html>
<head>
<title>SPIT-PAY</title>
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
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
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
												<span class="prfil-img"> </span>
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
											<li> <a href="#"><i class="fa fa-sign-out"></i> Logout</a> </li>
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
<div class="inner-block">
    <div class="blank">


    		<p>VIEW GROUP</p>
 <br/><br/>

 <div class="creategrp">

<form action="viewgroup.php" method="POST" >

 <input type="text" name="grpnam" placeholder="GROUP NAME">
 <br/><br/>



   <input type="submit" name="create"  value="VIEW"/>
 <br/><br/>



 <?php



  define('DB_HOST', 'localhost');
  define('DB_NAME', 'db1');
   define('DB_USER','root');
   define('DB_PASSWORD','');
    $con = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die("Failed to connect to MySQL: " . mysql_error()) ;

       if(isset($_POST['create'])) {

      NewUser($con);
       }
       function NewUser($con)
      {
        $grp= $_POST['grpnam'];
       $querye = "SELECT id,email1 FROM $grp" ;
       $result = mysqli_query ($con,$querye);
       echo"<table border='2'>";

       if($result)
       {
          echo"<tr><td>$grp</td><tr>";

       while($row= mysqli_fetch_assoc($result))
       {


         echo"<tr><td>{$row['email1']}</td><tr>";
       }

       echo"</table>";
        }
        else {

          echo"<script>
          alert('Wrong Groupname');

          </script>";
        }

      }
   ?>

  </div>






       <div id="main">
       <!--<input type="button" id="btAdd" name="addbutton" value="Add User" class="bt" />
        <input type="button" id="btRemove" name="removebutton" value="Remove User" class="bt" />
        <input type="button" id="btRemoveAll" name="removeall" value="Remove All" class="bt" />--><br />
  <br/>



         <!-- <br/><input type="submit" name="create"  value="create"/> -->

     </div>


</form>


 </div>
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
		        <li id="menu-home" ><a href="home.html"><i class="fa fa-tachometer"></i><span>HOME</span></a></li>
		        <li><a href="#"><i class="fa fa-cogs"></i><span>GROUPS</span><span class="fa fa-angle-right" style="float: right"></span></a>
		          <ul>
		          	 <li><a href="viewgrp.html">VIEW GROUP</a></li>
		            <li><a href="editgrp.php">EDIT GROUP</a></li>
		            <li><a href="friends.html">FRIENDS</a></li>
		          </ul>
		        </li>
		        <li id="menu-comunicacao" ><a href="creategrp.html"><i class="fa fa-book nav_icon"></i><span>CREATE GROUP</span></span></a>

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
