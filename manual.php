<!DOCTYPE html>
<?php

include("auth.php");?>
<html>
   <head>
      <title>Manual</title>
      <meta name = "viewport" content = "width = device-width, initial-scale = 1">
      <link rel = "stylesheet"
         href = "css/materialicons.css">
      <link rel = "stylesheet"
         href = "css/materialize.min.css">
      <script type = "text/javascript"
         src = "js/jquery-2.1.1.min.js"></script>
      <script src = "js/materialize.min.js">
      </script>
      <style type="text/css">
         .no-padding {
            padding:0px !important
         }
         header{
  font-size: 18px; float: right;
  margin-right: 5%;

  color: teal;
  text-decoration: none;
}
header nav a{
  padding:20px;
  margin: 10px;
}
      </style>

         <script>
            $(document).ready(function(){
                $("#sub").click(function(){
                    $(".disabled").removeClass("disabled");

                });
            });
         </script>
         <script>
                  $(document).ready(function(){
                     $("#sub").click(function(){
                        $('#motor-toggle').prop("disabled", false);
                     });
                  });
         </script>



   </head>

   <body>

<header>
    <nav>
        <a href="#">Welcome <?php echo $_SESSION['username']; ?>!</a>
        <a href="logout.php">Logout</a>
    </nav>
   </header>



    <div class="row">

      <div class="col s3">
        <div class = "collection">
         <a href = "automatic.php" class = "collection-item">Automatic</a>
         <a href = "manual.php" class = "collection-item active">Manual</a>
         <a href = "prediction.php" class = "collection-item">Prediction</a>
      </div>
      </div>

      <div class="col s9">
         <div class="section" align="center" style="padding-right: 200px; padding-left: 200px; padding-top: 50px;">
            <div class="section">
              <div class="row">
                <div class="input-field col s12">
                  <input value=" " id="moisture" type="number" class="validate">
                  <label class="active" for="first_name2">Moisture Value</label>
                  <a id="sub" class="waves-effect waves-light btn">SUBMIT</a>
                </div>

              </div>
            </div>
         </div>

         <div class="section" align="center">

            <div class="switch">
             <label>
               <b>Motor</b> On
               <input id="motor-toggle" type="checkbox" disabled>
               <span class="lever"></span>
               Off
             </label>
           </div>
         </div>

      <div class = "row center">
      <a class="waves-effect waves-light btn disabled">High Supply</a>
      <a class="waves-effect waves-light btn disabled">Medium Supply</a>
      <a class="waves-effect waves-light btn disabled">Low Supply</a>
      </div>


      <div class="row">
         <div class="col s6">
            <iframe width="450" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/400841/charts/1"></iframe>
         </div>
         <div class="col s6">
            <iframe width="450" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/400841/charts/2"></iframe>
         </div>
      </div>

      <div class="row center">

            <iframe width="450" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/400841/charts/3"></iframe>

      </div>




    </div>









   </body>
</html>