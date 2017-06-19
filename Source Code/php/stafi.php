<?php
session_start();
 if (!isset($_SESSION['username']))
{
  echo "<script>window.location.assign('login.php')</script>";
}

?>

 <?php
      mysql_connect("localhost","msinaj14","ms518ora");
      mysql_select_db("web16_msinaj14");
	  
	if(isset($_POST['back'])) {
		$home=$_SESSION['pageaddress'];
		header("Location: $home");
	}
	if(isset($_POST["logout"])) {
     session_destroy();
     session_unset();
     header("Location: login.php");
    } 
      ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Student  Page</title>
 
    <link rel="stylesheet" href="bootstrap-4.0.0-alpha.2/dist/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

  </head>
  <body>
<?php 
include('head.php');

?>
  <div class="container">
   
 <form method='POST' action=''>
   <div class="row">

    <div class="col-md-2 col-sm-offset-10">
  
      <input type="submit" name='back' class="btn btn-danger" value='Kthehu'/>
      <input type="submit" name='logout' class="btn btn-info" value='Dil'/>
  
    </div><!-- end col -->
  </div><!-- end row -->
  </form>    
      <br>

  <div class="row">          
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>SSN</th>
        <th>Emri</th>
        <th>Mbiemri</th>
		<th>Kontakti</th>
		<th>Email</th>
        <th>Qyteti</th>
		<th>Rruga</th>
		<th>Nr.</th>
        <th>Pozicioni</th>
        
      
      </tr>
    </thead>
 <tbody>
        <tr>

      <?php
      mysql_connect("localhost","msinaj14","ms518ora");
      mysql_select_db("web16_msinaj14");
      $query="SELECT * from stafi";
      $run=mysql_query($query);

while ($row=mysql_fetch_array($run))
{
	
      $ssn=$row[0];
      $emri=$row[1];
	  $mbiemri=$row[2];
	  $kontakti=$row[3];
      $email=$row[4];
      $qyteti=$row[5];
	  $rruga=$row[6];
     $no=$row[8];
	$poz=$row[10];
   
?>      <tr>
        

        <td><?php echo $row[0]; ?></td>
        <td><?php echo $row[1]; ?></td>
        <td><?php echo $row[2]; ?></td>
        <td><?php echo $row[3]; ?></td>
        <td><?php echo $row[4]; ?></td>
        <td><?php echo $row[5]; ?></td>
		<td><?php echo $row[6]; ?></td>
        <td><?php echo $row[8]; ?></td>
		<td><?php echo $row[10]; ?></td>

      </tr>
	  
    </tr>
<?php    } ?>
</tbody>
</table>
</div>
      

     
  </div>
 
   

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="bootstrap-4.0.0-alpha.2/dist/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>
  </body>
</html>