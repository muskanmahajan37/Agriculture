<!DOCTYPE html>
<?php

include("auth.php");?>
<html>
   <head>
      <title>Prediction</title>
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
         <a href = "manual.php" class = "collection-item">Manual</a>
         <a href = "prediction.php" class = "collection-item active">Prediction</a>
      </div>
      </div>

      <div class="col s9">
         <div class="section" align="center">
            <div class="switch">
             <label>
               Activate
               <input type="checkbox">
               <span class="lever"></span>

             </label>
           </div>
         </div>
<div class="container">
  <form method="post">
    <h4>Provide Input Here!</h4>
    <div class="row">
      <div class="col s6">
        <div class="form-group">
          <label for="first">Value 1</label>
          <input type="text" class="form-control" placeholder="enter value.." name="value1">
        </div>
      </div>
      <!--  col-md-6   -->

      <div class="col s6">
        <div class="form-group">
          <label for="last">Value 2</label>
          <input type="text" class="form-control" placeholder="enter value.." name="value2">
        </div>
      </div>
      <!--  col-md-6   -->
    </div>


    <div class="row">
      <div class="col s6">
        <div class="form-group">
          <label for="company">Value 3</label>
          <input type="text" class="form-control" placeholder="enter value.." name="value3">
        </div>


      </div>
      <!--  col-md-6   -->

      <div class="col s6">

        <div class="form-group">
          <label for="phone">Value 4</label>
          <input type="text" class="form-control" id="phone" placeholder="enter value.." name="value4">
        </div>
      </div>
      <!--  col-md-6   -->
    </div>
    <!--  row   -->


    
      <!--  col-md-6   -->
  <div class="row">
      <div class="col s6">

        <div class="form-group">
          <label for="email">Value 5</label>
          <input type="text" class="form-control" id="email" placeholder="enter value.." name="value5">
        </div>
      </div>
   
      <div class="col s6">
    
        <div class="form-group">
          <label for="email">Value 6</label>
          <input type="text" class="form-control" id="email" placeholder="enter value.." name="value6">
        </div>
      </div>
    </div>
      <div class="row">
      <div class="col s6">

        <div class="form-group">
          <label for="email">Value 7</label>
          <input type="text" class="form-control" id="email" placeholder="enter value.." name="value7">
        </div>
      </div>
    
      <div class="col s6">

        <div class="form-group">
          <label for="email">Value 8</label>
          <input type="text" class="form-control" id="email" placeholder="enter value.." name="value8">
        </div>
      </div>
    </div>
      <div class="row">
      <div class="col s6">

        <div class="form-group">
          <label for="email">Value 9</label>
          <input type="text" class="form-control" id="email" placeholder="enter value.." name="value9">
        </div>
      </div>
    
      <div class="col s6">

        <div class="form-group">
          <label for="email">Value 10</label>
          <input type="text" class="form-control" id="email" placeholder="enter value.." name="value10">
        </div>
      </div>
    </div>
    <br/>
    <button type="submit" class="btn btn-primary" name="sbt">Submit</button>
    <br><br>
  </form>
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
     

<?php 

if(isset($_POST['sbt']))
{

  $value1=$_POST['value1'];
  $value2=$_POST['value2'];
  $value3=$_POST['value3'];
  $value4=$_POST['value4'];
  $value5=$_POST['value5'];
  $value6=$_POST['value6'];
  $value7=$_POST['value7'];
  $value8=$_POST['value8'];
  $value9=$_POST['value9'];
  $value10=$_POST['value10'];
    
  $file=fopen("details/value.doc",'w') or die("Invalid details");
  fwrite($file,"AGRICLUTURE VALUES");
  fwrite($file,"\r\n");
  fwrite($file,"\r\n");
  fwrite($file,"Value1  - ".$value1);
  fwrite($file,"\r\n");
  fwrite($file,"Value2  - ".$value2);
  fwrite($file,"\r\n");
  fwrite($file,"\r\n");
  
  fwrite($file,"\r\n");
  fwrite($file,"\r\n");
  fwrite($file,"Value 3 - ".$value3);
  fwrite($file,"\r\n");
  fwrite($file,"Value 4 - ".$value4);
  fwrite($file,"\r\n");
  fwrite($file,"\r\n");
  
  fwrite($file,"\r\n");
  fwrite($file,"\r\n");
  fwrite($file,"Value 5 - ".$value5); 
  fwrite($file,"\r\n");
  fwrite($file,"Value 6 - ".$value6); 
  fwrite($file,"\r\n");
  fwrite($file,"\r\n");
  fwrite($file,"\r\n");
  fwrite($file,"\r\n");
  fwrite($file,"Value 7 - ".$value7);
  fwrite($file,"\r\n");
  fwrite($file,"Value 8 - ".$value8);
  fwrite($file,"\r\n");
  fwrite($file,"Value 9 - ".$value9);
  fwrite($file,"\r\n");
  fwrite($file,"\r\n");
  
  fwrite($file,"Value 10 - ".$value10);
  
  fwrite($file,"\r\n");
  fwrite($file,"\r\n");
    
  fclose($file);
}
  ?>





   </body>
</html>