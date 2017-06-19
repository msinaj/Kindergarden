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
    <title>Vleresime dhe Mungesa</title>
 
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
</br></br></br></br></br></br>
<h2 class="center">Vleresime dhe Mungesa</h2>
</br>
<div class="row">
  <div class="col-md-4 col-md-offset-4">
<form method = 'post' action ='' >

<label><h3><b><i>Grupi 
<?php 

	$group=1;

echo $group;

?></i></b></h3></label>

<fieldset class="form-group">
    <label for="exampleSubject">Nxenesi: </label>
    <select class="form-control"  name="student" id="examplesubject">
<?php
      mysql_connect("localhost","msinaj14","ms518ora");
      mysql_select_db("web16_msinaj14");

$query1 = "select * from femijet where Grupi='$group'";

$run1 = mysql_query($query1);

while ($row1=mysql_fetch_array($run1)) {

?>
      <option><?php printf("%s-%s-%s",$row1[0],$row1[1],$row1[2]); ?></option>

      <?php } ?> 
    </select>
  </fieldset>



  <label>Mungoi : </label>
  </br>
 <input type="radio" name= "att" value = '1'> Po &nbsp;&nbsp;&nbsp;
 <input type="radio" name= "att" value = '0'>Jo
 </br>
 <label>Ecuria : </label>
  <br>
 <input type="radio" name= "grade" value = 'Shume e mire'>Shume e mire &nbsp;&nbsp;&nbsp;
 <input type="radio" name= "grade" value = 'E mire'>E mire
    </br>
 
  <br> <br>
  <input type="submit" class="btn btn-primary" name="ruaj"value='Ruaj'/>
  <input type="submit" class="btn btn-danger" name='back' value='Anullo'/>
  

</form>
</div><!--end col -->

</div><!--end row -->

</div><!-- end container --> 
  
<?php

if(isset($_POST['ruaj']))
{
	
	$stdata=explode("-", $_POST['student']);
	$att = intval($_POST['att']);

	$grade = $_POST['grade'];
	$amza=$stdata[0];

   $result1 = "UPDATE femijet SET Ecuria='$grade' where Amza='$amza'";
	$res1=mysql_query($result1);
	
	$q1="SELECT Mungesa from femijet where Amza='$amza'";
	$run3= mysql_query($q1) OR Die();
	$row3=mysql_result($run3,0);

	$res=$row3[0]+intval($att); 
	
	
	$result2 = "UPDATE femijet SET Mungesa='$res' where Amza='$amza'";
	$res2=mysql_query($result2); 
	
   if($res1&&$res2)
                {
                  
                echo "<script>alert('Vleresimi u krye me Sukses')</script>";
                
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

