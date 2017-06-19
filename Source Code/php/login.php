<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Page</title>
 
    <link rel="stylesheet" href="bootstrap-4.0.0-alpha.2/dist/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
 
    
  </head>
  <body>
    <?php include 'head.php';?>

<div class="container">

<?php
if(isset($_POST['login'])){

  $username=$_POST['username'];
  $password=$_POST['password'];


  $mysqli = new mysqli("localhost","msinaj14","ms518ora", "web16_msinaj14");
  if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
  }
  
  $res = $mysqli->query("SELECT * FROM stafi where Perdoruesi='$username' and Fjalekalimi='$password'");
  $row = $res->fetch_assoc();
 
  $user = $row['Perdoruesi'];
  $pass = $row['Fjalekalimi'];
  $type = $row['Pozicioni'];
  if($user==$username && $pass=$password){
    session_start();
    if($type=="Edukatore"){
      $_SESSION['username']=$user;
      $_SESSION['mytype']=$type;
      echo "<script>window.location.assign('teacher.php')</script>";
	}
	else if($type=="Zyra e Regjistrimit"){
		$_SESSION['username']=$user;
      $_SESSION['mytype']=$type;
      echo "<script>window.location.assign('admission.php')</script>";
	}
	else if($type=="CEO"){
		$_SESSION['username']=$user;
      $_SESSION['mytype']=$type;
      echo "<script>window.location.assign('admin.php')</script>";
	}
  } 
  
  else{
?>
<div class="alert alert-danger alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
  <strong>Warning!</strong> This username or password is not the same with database.
</div>
<?php
  }
}
?>
   

   <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
    <form role="form" method="post">
      <div class="form-group">
 <label for="username"><b>Perdoruesi</b></label>
 <input type="text" class="form-control" id="username" name="username">
      </div>
      <div class="form-group">
 <label for="password"><b>Fjalekalimi</b></label>
 <input type="password" class="form-control" id="password" name="password">
      </div>
      <button type="submit" name="login" class="btn btn-primary">Log In</button>
      
    </form>
      </div> 
      <div class="col-md-4"></div>
     </div>
    
     
  </div>

 
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="bootstrap-4.0.0-alpha.2/dist/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>
  </body>
</html> 