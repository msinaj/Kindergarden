<!DOCTYPE html>
<?php
session_start();
if (!isset($_SESSION['username']))
{
  echo "<script>window.location.assign('login.php')</script>";
}
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ndrysho Ditarin</title>
 
     <link rel="stylesheet" href="bootstrap-4.0.0-alpha.2/dist/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
 
	<style>
body  {
    background-image: url("natyra.jpg");

}
</style>
  </head>
  <body>
  <p></p>
<div class="container">
 

  <div class="row">

    <div class="col-md-2 col-sm-offset-10">
  
  
    </div><!-- end col -->
  </div><!-- end row -->
</br>

<h2 class="center">Ndrysho Ditarin</h2>
<hr/>
<div class="row">
  <div class="col-md-4 col-md-offset-4">
<form method = 'post' action ='' >


    <label for="exampleSubject"><h5><b><i>Permbajtja:</i></b></h5> </label>
    <textarea class="form-control"  name="text" type='submit' rows="25" cols="50"></textarea>
	</br>
 <input type="submit" class="btn btn-primary" name="ruaj"value='Ruaj'/>
  <input type="submit" class="btn btn-danger" name='back' value='Anullo'/>


</form>
</div><!--end col -->

</div><!--end row -->

</div><!-- end container --> 
  
<?php

if(isset($_POST['ruaj']))
{
      mysql_connect("localhost","msinaj14","ms518ora");
      mysql_select_db("web16_msinaj14");
	$content = $_POST['text'];
	$date=date('Y-m-d');
	
   $result1 = "UPDATE ditari SET Programi='$content' where Data='$date'";
	$res1=mysql_query($result1);
	
   if($res1)
                {
                  
                echo "<script>alert('Ditari u ndryshua me sukses!')</script>";
                
                }

                else
                {
                  echo "<script>alert('Error!!!')</script>";
                }
}
else if(isset($_POST['back'])){
		$home=$_SESSION['pageaddress'];
		header("Location: $home");		
}

?>
 
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="bootstrap-4.0.0-alpha.2/dist/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>
  </body>
</html> 

