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
           </style>
      </head>
      <body>
           <br /><br />
           <div class="container" style="width:500px;">
                <h3 align="center">Welcome</h3><br />
                <label>Enter State</label>
                <form action = "autocomplete.php" method = "POST">
                <input type="text" name="co" id="country" class="form-control" placeholder="Enter State" />
                <br><input type="submit" name="create"  value="VIEW PINCODE"/>
              </form>
                <div id="countryList"></div>

           </div>
      </body>
 </html>
 <script>

 $('#create').click(function(){
      $.ajax({

           url:"link.php",
           method:"POST",
           data:$('#add_name').serialize(),

           success:function(data)
           {
                alert(data);
                $('#add_name')[0].reset();
           }
      });
 });
</script>
