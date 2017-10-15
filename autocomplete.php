< <!DOCTYPE html>
 <html>
      <head>
           <title>Pincode</title>
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
           <style>
           ul{
                background-color:#eee;
                cursor:pointer;
           }
           li{
                padding:12px;
           }

           #ao{
             font-family: sans-serif;
             font-size: 20;
             font-weight: bold;
             color: #00695C;
             margin-left: 30%;
             background-color: #F0F4C3;
           }
           </style>
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
      </head>
      <body>

        <link rel="stylesheet" type="text/css" href="mapstyle.css">
        <div>
        <object data="map.svg" type="image/svg+xml" id="mapsvg" width="100%" height="100%"></object>
    </div>
    <div id='ao' class="col-md-3" >


  </div>












           <br /><br />
           <div class="container" style="width:500px;">


                <div id="countryList"></div>

           </div>
      </body>
 </html>
 <script>
  var a = document.getElementById('mapsvg');
  a.addEventListener("load",function(){
    var svgDoc = a.contentDocument;
    var delta= svgDoc.getElementById("kasargod")

    delta.addEventListener("click",function(){
      var userID = $(this).attr('id');
      $.ajax({

           url:"search.php",
           method:"POST",
           data: "userid=" + userID,
           dataType: 'json',
           success:function(data)
           {
             var generateHere = document.getElementById("ao");
             var str = '<div class="someclass">';

             for (i=0;i<data.length;i++)
             {

               str += '<br> '+data[i].Officename+'  '+data[i].Pincode+'<br>';
             }

             str +='</div>';
             //for(i=0;i<data.length;i++)
             generateHere.innerHTML = str;
           }
      });
    },false);
  }, false);




</script>

<script>
 var a = document.getElementById('mapsvg');
 a.addEventListener("load",function(){
   var svgDoc = a.contentDocument;
   var delta= svgDoc.getElementById("kannur")

   delta.addEventListener("click",function(){
     var userIDk = $(this).attr('id');
     $.ajax({

          url:"search.php",
          method:"POST",
          data: "userid=" + userIDk,
          dataType: 'json',
          success:function(data)
          {
            var generateHere = document.getElementById("ao");
            var str = '<div class="someclass">';

            for (i=0;i<data.length;i++)
            {

              str += '<br> '+data[i].Officename+'  '+data[i].Pincode+'<br>';
            }

            str +='</div>';
            //for(i=0;i<data.length;i++)
            generateHere.innerHTML = str;
          }
     });
   },false);
 }, false);




</script>

<script>
 var a = document.getElementById('mapsvg');
 a.addEventListener("load",function(){
   var svgDoc = a.contentDocument;
   var delta= svgDoc.getElementById("wayanad")

   delta.addEventListener("click",function(){
     var userIDkl = $(this).attr('id');
     $.ajax({

          url:"search.php",
          method:"POST",
          data: "userid=" + userIDkl,
          dataType: 'json',
          success:function(data)
          {
            var generateHere = document.getElementById("ao");
            var str = '<div class="someclass">';

            for (i=0;i<data.length;i++)
            {

              str += '<br> '+data[i].Officename+'  '+data[i].Pincode+'<br>';
            }

            str +='</div>';
            //for(i=0;i<data.length;i++)
            generateHere.innerHTML = str;
          }
     });
   },false);
 }, false);




</script>


<script>
 var a = document.getElementById('mapsvg');
 a.addEventListener("load",function(){
   var svgDoc = a.contentDocument;
   var delta= svgDoc.getElementById("kozhikode")

   delta.addEventListener("click",function(){
     var userIDl = $(this).attr('id');
     $.ajax({

          url:"search.php",
          method:"POST",
          data: "userid=" + userIDl,
          dataType: 'json',
          success:function(data)
          {
            var generateHere = document.getElementById("ao");
            var str = '<div class="someclass">';

            for (i=0;i<data.length;i++)
            {

              str += '<br> '+data[i].Officename+'  '+data[i].Pincode+'<br>';
            }

            str +='</div>';
            //for(i=0;i<data.length;i++)
            generateHere.innerHTML = str;
          }
     });
   },false);
 }, false);




</script>

<script>
 var a = document.getElementById('mapsvg');
 a.addEventListener("load",function(){
   var svgDoc = a.contentDocument;
   var delta= svgDoc.getElementById("malappuram")

   delta.addEventListener("click",function(){
     var userIDp = $(this).attr('id');
     $.ajax({

          url:"search.php",
          method:"POST",
          data: "userid=" + userIDp
          dataType: 'json',
          success:function(data)
          {
            var generateHere = document.getElementById("ao");
            var str = '<div class="someclass">';

            for (i=0;i<data.length;i++)
            {

              str += '<br> '+data[i].Officename+'  '+data[i].Pincode+'<br>';
            }

            str +='</div>';
            //for(i=0;i<data.length;i++)
            generateHere.innerHTML = str;
          }
     });
   },false);
 }, false);




</script>

<script>
 var a = document.getElementById('mapsvg');
 a.addEventListener("load",function(){
   var svgDoc = a.contentDocument;
   var delta= svgDoc.getElementById("thrissur")

   delta.addEventListener("click",function(){
     var userIDo = $(this).attr('id');
     $.ajax({

          url:"search.php",
          method:"POST",
          data: "userid=" + userIDo,
          dataType: 'json',
          success:function(data)
          {
            var generateHere = document.getElementById("ao");
            var str = '<div class="someclass">';

            for (i=0;i<data.length;i++)
            {

              str += '<br> '+data[i].Officename+'  '+data[i].Pincode+'<br>';
            }

            str +='</div>';
            //for(i=0;i<data.length;i++)
            generateHere.innerHTML = str;
          }
     });
   },false);
 }, false);




</script>

<script>
 var a = document.getElementById('mapsvg');
 a.addEventListener("load",function(){
   var svgDoc = a.contentDocument;
   var delta= svgDoc.getElementById("palakkad")

   delta.addEventListener("click",function(){
     var userIDy = $(this).attr('id');
     $.ajax({

          url:"search.php",
          method:"POST",
          data: "userid=" + userIDy,
          dataType: 'json',
          success:function(data)
          {
            var generateHere = document.getElementById("ao");
            var str = '<div class="someclass">';

            for (i=0;i<data.length;i++)
            {

              str += '<br> '+data[i].Officename+'  '+data[i].Pincode+'<br>';
            }

            str +='</div>';
            //for(i=0;i<data.length;i++)
            generateHere.innerHTML = str;
          }
     });
   },false);
 }, false);




</script>

<script>
 var a = document.getElementById('mapsvg');
 a.addEventListener("load",function(){
   var svgDoc = a.contentDocument;
   var delta= svgDoc.getElementById("ernakulam")

   delta.addEventListener("click",function(){
     var userIDjk = $(this).attr('id');
     $.ajax({

          url:"search.php",
          method:"POST",
          data: "userid=" + userIDjk,
          dataType: 'json',
          success:function(data)
          {
            var generateHere = document.getElementById("ao");
            var str = '<div class="someclass">';

            for (i=0;i<data.length;i++)
            {

              str += '<br> '+data[i].Officename+'  '+data[i].Pincode+'<br>';
            }

            str +='</div>';
            //for(i=0;i<data.length;i++)
            generateHere.innerHTML = str;
          }
     });
   },false);
 }, false);



</script>

<script>
 var a = document.getElementById('mapsvg');
 a.addEventListener("load",function(){
   var svgDoc = a.contentDocument;
   var delta= svgDoc.getElementById("alappuzha")

   delta.addEventListener("click",function(){
     var userIDrk = $(this).attr('id');
     $.ajax({

          url:"search.php",
          method:"POST",
          data: "userid=" + userIDrk,
          dataType: 'json',
          success:function(data)
          {
            var generateHere = document.getElementById("ao");
            var str = '<div class="someclass">';

            for (i=0;i<data.length;i++)
            {

              str += '<br> '+data[i].Officename+'  '+data[i].Pincode+'<br>';
            }

            str +='</div>';
            //for(i=0;i<data.length;i++)
            generateHere.innerHTML = str;
          }
     });
   },false);
 }, false);




</script>

<script>
 var a = document.getElementById('mapsvg');
 a.addEventListener("load",function(){
   var svgDoc = a.contentDocument;
   var delta= svgDoc.getElementById("idukki")

   delta.addEventListener("click",function(){
     var userIDqk = $(this).attr('id');
     $.ajax({

          url:"search.php",
          method:"POST",
          data: "userid=" + userIDqk,
          dataType: 'json',
          success:function(data)
          {
            var generateHere = document.getElementById("ao");
            var str = '<div class="someclass">';

            for (i=0;i<data.length;i++)
            {

              str += '<br> '+data[i].Officename+'  '+data[i].Pincode+'<br>';
            }

            str +='</div>';
            //for(i=0;i<data.length;i++)
            generateHere.innerHTML = str;
          }
     });
   },false);
 }, false);




</script>

<script>
 var a = document.getElementById('mapsvg');
 a.addEventListener("load",function(){
   var svgDoc = a.contentDocument;
   var delta= svgDoc.getElementById("kottayam")

   delta.addEventListener("click",function(){
     var userIDkt = $(this).attr('id');
     $.ajax({

          url:"search.php",
          method:"POST",
          data: "userid=" + userIDkt,
          dataType: 'json',
          success:function(data)
          {
            var generateHere = document.getElementById("ao");
            var str = '<div class="someclass">';

            for (i=0;i<data.length;i++)
            {

              str += '<br> '+data[i].Officename+'  '+data[i].Pincode+'<br>';
            }

            str +='</div>';
            //for(i=0;i<data.length;i++)
            generateHere.innerHTML = str;
          }
     });
   },false);
 }, false);



</script>

<script>
 var a = document.getElementById('mapsvg');
 a.addEventListener("load",function(){
   var svgDoc = a.contentDocument;
   var delta= svgDoc.getElementById("pathanamthitta")

   delta.addEventListener("click",function(){
     var userIDrk = $(this).attr('id');
     $.ajax({

          url:"search.php",
          method:"POST",
          data: "userid=" + userIDrk,
          dataType: 'json',
          success:function(data)
          {
            var generateHere = document.getElementById("ao");
            var str = '<div class="someclass">';

            for (i=0;i<data.length;i++)
            {

              str += '<br> '+data[i].Officename+'  '+data[i].Pincode+'<br>';
            }

            str +='</div>';
            //for(i=0;i<data.length;i++)
            generateHere.innerHTML = str;
          }
     });
   },false);
 }, false);




</script>

<script>
 var a = document.getElementById('mapsvg');
 a.addEventListener("load",function(){
   var svgDoc = a.contentDocument;
   var delta= svgDoc.getElementById("kollam")

   delta.addEventListener("click",function(){
     var userIDkw = $(this).attr('id');
     $.ajax({

          url:"search.php",
          method:"POST",
          data: "userid=" + userIDkw,
          dataType: 'json',
          success:function(data)
          {
            var generateHere = document.getElementById("ao");
            var str = '<div class="someclass">';

            for (i=0;i<data.length;i++)
            {

              str += '<br> '+data[i].Officename+'  '+data[i].Pincode+'<br>';
            }

            str +='</div>';
            //for(i=0;i<data.length;i++)
            generateHere.innerHTML = str;
          }
     });
   },false);
 }, false);



</script>

<script>
 var a = document.getElementById('mapsvg');
 a.addEventListener("load",function(){
   var svgDoc = a.contentDocument;
   var delta= svgDoc.getElementById("thiruvananthapuram")

   delta.addEventListener("click",function(){

     var userIDck = $(this).attr('id');
     $.ajax({

          url:"search.php",
          method:"POST",
          data: "userid=" + userIDck,
          dataType: 'json',
          success:function(data)
          {
            var generateHere = document.getElementById("ao");
            var str = '<div class="someclass">';

            for (i=0;i<data.length;i++)
            {

              str += '<br> '+data[i].Officename+'  '+data[i].Pincode+'<br>';
            }

            str +='</div>';
            //for(i=0;i<data.length;i++)
            generateHere.innerHTML = str;
          }
     });
   },false);
 }, false);


</script>
<?php
define('DB_NAME', 'pincode');
define('DB_HOST', 'localhost');
define('DB_USER','root');
define('DB_PASSWORD','');
$con = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die("Failed to connect to MySQL: " . mysql_error()) ;
echo "string";
if(isset($_POST['userid']))
{
   $cty = $_POST['userid'];



$query = "SELECT Officename, Pincode FROM db WHERE District = '$cty'";
$result = mysqli_query($con, $query);

if(mysqli_num_rows($result) > 0)
{
    while($row = mysqli_fetch_array($result))
    {
         echo"<tr><td>{$row['Officename']}</td><td>{$row['Pincode']}</td><tr>";
    }
}
else
{
    $output .= '<li>District Not Found</li>';
}
$output .= '</ul>';
echo $output;
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
