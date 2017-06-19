<?php
ob_start();
session_start();
require_once "Database_Class.php";
if (!isset($_SESSION['username']))
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
    <title> Teachers Page</title>
 
   <link rel="stylesheet" href="bootstrap-4.0.0-alpha.2/dist/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    

  </head>
  <body>
 <?php
 include('head.php');
 $uname=filter_var($_SESSION['username'], FILTER_SANITIZE_STRING);
	
	
 if(isset($_POST['klasa'])){
		$_SESSION['id']=$_SESSION['level'];
		$_SESSION['pageaddress']="teacher.php";
		header("Location: klasa.php");
	}
	else if(isset($_POST['tedhenat'])){
		$_SESSION['id']=$_SESSION['level'];
		$_SESSION['pageaddress']="teacher.php";
		header("Location: tedhenat.php");
	}
	else if(isset($_POST['evaluation'])){
		$_SESSION['id']=$_SESSION['level'];
		$_SESSION['pageaddress']="teacher.php";
		header("Location: evaluation.php");
	}
	else if(isset($_POST['changepass'])){
		$_SESSION['id']=$_SESSION['level'];
		$_SESSION['pageaddress']="teacher.php";
		header("Location: changepass4.php");
	}
	else if(isset($_POST['logout'])){
		session_destroy();
        session_unset();
        header("Location: login.php");
	}	
 ?>

	<div class="container">
      <div class="buttons">
			<div >
			<form method='POST' action=''>
				<p>
					
					<a class="btn btn-secondary btn-xs"  name='plani'  role="button"  value='Plani Vjetor' href='plani.pdf' target='_blank'>Plani Vjetor</a>
					<input class="btn btn-secondary btn-xs" name='klasa'  role="button" type='submit' value='Klasa'/>
					<input class="btn btn-secondary btn-xs" name='evaluation'  role="button" type='submit' value='Vleresime dhe Mungesa'/>
					<input class="btn btn-secondary btn-xs" name='tedhenat'  role="button" type='submit' value='Te dhenat e mia'/>
					<input class="btn btn-secondary btn-xs" name='changepass'  role="button" type='submit' value='Ndrysho Fjalekalimin'/>
					<input class="btn btn-secondary btn-xs" name='logout' role="button" type='submit' value='Dil'/>
					
				</p>
			</form>
			</div>
		</div>
		
		<div>
		</br>
		<h2>Ditari</h2>
		</br>
		</br>
			<div>
		<?php 		
					$db=new Database();
					$connection = $db->connect_to_db();
					
					
					$query="SELECT Programi FROM ditari where Grupi='1'";
						
					$result = $connection->query($query);
					
						while($row = $result->fetch_assoc()) {
							echo "<p>".$row['Programi']."</p>";
							
						}?>

		
		</div>
		</div>
	
		<div>
		</br>
		<a class="btn btn-secondary btn-xs" href="ndryshoditarin.php" role="button">Ndryshoje Ditarin</a>
		</br></br></br>
			<form action="upload.php" method="post" enctype="multipart/form-data">
				Ngarko Ditarin:
				<input type="file" name="fileToUpload" id="fileToUpload">
				<input type="submit" value="Ngarko PDF" name="submit">
			</form>
			</br></br>
			
		</div>
	</div>
 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="bootstrap-4.0.0-alpha.2/dist/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>
  </body>
</html>