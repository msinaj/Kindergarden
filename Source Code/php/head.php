<?php



mysql_connect("localhost","msinaj14","ms518ora");
      mysql_select_db("web16_msinaj14");

      $query="select * from institucioni";
      $run=mysql_query($query);

while ($row=mysql_fetch_array($run))
{
      $head_id=$row[0];
      $name_education=$row[1];
      $city=$row[3];
      $road=$row[4];
      $email=$row[5];
      

}
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>head Paper</title>
 
      <link rel="stylesheet" href="bootstrap-4.0.0-alpha.2/dist/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
 
    
  </head>
  <body>

<div class="container">
 
  <div class="row">
    <center><img src="img/logo.png" alt="Responsive image" style="width:600px; height:260px;"></center>
    <p class="center" >
          <b>Rruga: <?php echo $road;?>, <?php echo $city;?></b> <br>
          <b>E-mail: <?php echo $email ;?> </b> </p>
          <hr>
         
  </div>

   
   
    
</div>
 
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="bootstrap-4.0.0-alpha.2/dist/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>
  </body>
</html> 