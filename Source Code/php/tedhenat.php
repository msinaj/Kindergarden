<?php
session_start();
 if (!isset($_SESSION['username']))
{
  echo "<script>window.location.assign('login.php')</script>";
}

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

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Attendance Page</title>
 
     <link rel="stylesheet" href="bootstrap-4.0.0-alpha.2/dist/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
 
    <style>
	.tabl {
			background-color: rgba(217, 217, 217,0.6);
			 position: relative;
			z-index: 1;
			max-width: 500px;
			margin: 90 auto 70px;
			padding: 45px;
			text-align: left;
			color: #00cc00;
			text-shadow: 0.5px 0.5px rgb(94, 65, 34);
    
		}
		.tabl th, .tabl td {
    padding: 12px;
}

body  {
    background-image: url("natyra.jpg");

}
	</style>
  </head>
  <body >
  <p></p>
<div class="container">
 

<?php
$uname=filter_var($_SESSION['username'], FILTER_SANITIZE_STRING);
	$_SESSION['pageaddress']="teacher.php";

	$mysqli = new mysqli("localhost", "msinaj14", "ms518ora", "web16_msinaj14");
  if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
  }
  
  $res = $mysqli->query("SELECT * FROM stafi where Perdoruesi='$uname'");
 

while($row = $res->fetch_assoc()) {
	
	echo "<table align='center' class='tabl'><tr><td style='color:#663300;'><b>SSN:</b></td><td>" . $row["SSN"]."</td></tr><tr><td style='color:#663300;'><b>Emri:</b></td><td>"
	. $row["Emri"]."</td></tr><tr><td style='color:#663300;'><b>Mbiemri:</b></td><td>"
		 . $row["Mbiemri"]."</td></tr><tr><td style='color:#663300;'><b>E-mail:</b></td><td>" . $row["E-mail"]."</td></tr><tr><td style='color:#663300;'><b>Numri i Kontaktit:</b></td><td>"
		 . $row["Numri i Kontaktit"]."</td></tr><tr><td style='color:#663300;'><b>Emri i Perdoruesit: <b></td><td>". $row["Perdoruesi"]."</td></tr><tr><td style='color:#663300;'><b>Fjalekalimin</b></td><td>" 
		 . $row["Fjalekalimi"]."</td></tr><tr><td style='color:#663300;'><b>Pozicioni:</b></td><td>" . $row["Pozicioni"]."</td></tr><tr><td style='color:#663300;'><b>Qyteti:<b></td><td>" 
		 . $row["Qyteti"]. "</td></tr><tr><td style='color:#663300;'><b>Rruga:</b></td><td>" . $row["Rruga"]."</td></tr><tr><td style='color:#663300;'><b>No.:</b></td><td>" . $row["No."]."</td></tr><tr><td style='color:#663300;'><b>Kodi Postar:<b></td><td>" 
		 . $row["Kodi Postar"]. "</td></tr></table>";

}
$mysqli->close();

?>
<form method='POST' action=''>
<center>

      <input type="submit" name='back' class="btn btn-danger" value='Kthehu'/>
      <input type="submit" name='logout' class="btn btn-info" value='Dil'/>
 
</center>
</form>
</div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="bootstrap-4.0.0-alpha.2/dist/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>
  </body>
</html> 
