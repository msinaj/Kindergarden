<?php
session_start();
require_once "Database_Class.php";
if (!isset($_SESSION['username']) && !isset($_SESSION['mytype'])=='admin')
{
  echo "<script>window.location.assign('login.php')</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Admin Page</title>
 
    <!-- Bootstrap -->
    <link rel="stylesheet" href="bootstrap-4.0.0-alpha.2/dist/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    
  </head>
  <body>
<?php
 include('head.php');
 $uname=filter_var($_SESSION['username'], FILTER_SANITIZE_STRING);
 
if(isset($_POST['klasat'])){
		$_SESSION['id']=$_SESSION['level'];
		$_SESSION['pageaddress']="admin.php";
		header("Location: klasat.php");
	}
	if(isset($_POST['stafi'])){
		$_SESSION['id']=$_SESSION['level'];
		$_SESSION['pageaddress']="admin.php";
		header("Location: stafi.php");
	}
	else if(isset($_POST['tedhenat'])){
		$_SESSION['id']=$_SESSION['level'];
		$_SESSION['pageaddress']="admin.php";
		header("Location: tedhenatceo.php");
	}
	else if(isset($_POST['ditari'])){
		$_SESSION['id']=$_SESSION['level'];
		$_SESSION['pageaddress']="admin.php";
		header("Location: ditaret.php");
	}
	else if(isset($_POST['menuja'])){
		$_SESSION['id']=$_SESSION['level'];
		$_SESSION['pageaddress']="admin.php";
		header("Location: menujaditore.php");
	}
	else if(isset($_POST['changepass'])){
		$_SESSION['id']=$_SESSION['level'];
		$_SESSION['pageaddress']="admin.php";
		header("Location: changepass1.php");
	}
	else if(isset($_POST['logout'])){
		session_destroy();
        session_unset();
        header("Location: login.php");
	}	
		
 ?>
  <div class="container">
  
    <div class="">
      <p class="center">Administratori.</p>
	  </br></br><form method='POST' action=''>  
	  <p><input class="btn btn-secondary btn-xs" name='klasat' role="button" value='Klasat' type='submit'/>
	  <input class="btn btn-secondary btn-xs" role="button" name='stafi' value='Stafi' type='submit'/>
	  <input class="btn btn-secondary btn-xs"  role="button" name='ditari'value='Shiko Ditaret' type='submit'/>
	  <input class="btn btn-secondary btn-xs"  role="button" name='menuja'value='Ndrysho Menune' type='submit'/>
	   <input class="btn btn-secondary btn-xs"  role="button" name='tedhenat'value='Te dhenat' type='submit'/>
	  <input class="btn btn-secondary btn-xs"  role="button" name='changepass'value='Ndrysho Fjalekalimin' type='submit'/>
	  <input class="btn btn-secondary btn-xs"  role="button" name='logout'value='Dil' type='submit'/>
      <div class="row">
   </form>   

     </div>
      <br>
      <p></p>
	  
	  
		<div>
		</br>
		<h2>Menuja</h2>
		</br>
		</br>
			<div>
		<?php 		
					$db=new Database();
					$connection = $db->connect_to_db();
					$date=date('Y-m-d');
					
					$query="SELECT Menuja FROM menujaditore where Data='$date'";
						
					$result = $connection->query($query);
					
						while($row = $result->fetch_assoc()) {
							echo "<p>".$row['Menuja']."</p>";
							
						}?>

		
		</div>
		</div>
    
 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="bootstrap-4.0.0-alpha.2/dist/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>
  </body>
</html>