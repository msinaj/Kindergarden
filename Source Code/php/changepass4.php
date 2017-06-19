<?php

ob_start();
session_start();
require_once "Database_Class.php";
require_once "crud_class_child.php";
$error="";
if (!isset($_SESSION['username']))
{
  echo "<script>window.location.assign('login.php')</script>";
}

	if(isset($_POST['back'])) {
		$home=$_SESSION['pageaddress'];
		header("Location: $home");
	}
	
	else if(isset($_POST['create'])) {
	
		if(!empty($_POST['pword1'])&&!empty($_POST['pword2'])&&!empty($_POST['pword'])&&!empty($_POST['uname'])){
			
			$uname=$_POST['uname'];
			$oldpword=$_POST['pword'];
			$password1 = $_POST['pword1'];
			$password2 = $_POST['pword2'];
			
			if($password1==$password2){
				if(preg_match("/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/",$password1)){
					
					$db=new Database();
					$connection = $db->connect_to_db();
					
						$query="SELECT * FROM stafi ";
						$update_query="UPDATE stafi SET Fjalekalimi='$password1' WHERE Perdoruesi='$uname'";
					
						$result = $connection->query($query);
						
						$flag=true;
						while($row = $result->fetch_assoc()) {
						
							if($row['Perdoruesi']==$uname&&$row['Fjalekalimi']==$oldpword){		
								if (mysqli_query($connection, $update_query)) {
									$error.= "Password updated successfully.";
									$flag=false;
									break;
								} else {
								$error.= "Something went wrong!!!";
								}
							}
						}
						if($flag){
							$error.="Fjalekalimi dhe Perdoruesi nuk perputhen!";
						}
						
			
				}
				else{
					$error.="Password must be more than 8 characters, must contain at least one capital letter, must contain at least one number.</br>";
				}
				
			}
			else $error.="Fjalekalimiet e reja nuk perputhen!";
			
		}
		else $error.="Duhet te plotesoni te gjithe formularin!";
		
	}


?>

<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Te regjistruar</title>
    
    <link href="http://localhost/Foleza/php/css1/foleza.min.css" rel="stylesheet">
    <link rel="stylesheet" href="http://localhost/Foleza/php/css1/style.css">
    <link href="http://localhost/Foleza/php/css1/custom.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">

<style>
body  {
    background-image: url("natyra.jpg");
    background-color: #cccccc;

}

  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 100%;
      margin: auto;
  }
  .navbar-fixed-top{
	height: 60px;
}
.n{
			 position: relative;
			z-index: 1;
			max-width: 500px;
			margin: 90 auto 70px;
			padding: 45px;
			text-align: left;
			color: #00cc00;
			text-shadow: 0.5px 0.5px rgb(94, 65, 34);
}
.n1{
	 margin: 5 auto 5px;
	padding: 5px;
	color: black;
}
</style>


</head>
<body>



	<div>
	
	<center>
	<form method='POST' action=''>
	</br></br></br></br></br></br></br></br></br></br>
		<table align='center' >
		</br></br>
		<tbody>
		<tr style='margin: 20px'>
		<td>
			
			<tr>
				<td><font class='n'>Emri i Perdoruesit: </font></td>
				<td><input class='n1' class="form_control" type='text' name='uname' placeholder="Perdoruesi"/></td>
			<tr>

			<tr>
				<td><font class='n'>Fjalekalimi i vjeter: </font></td>
				<td><input class='n1' class="form_control" type='password' name='pword' placeholder="Fjalekamimi i vjeter"/></td>
			<tr>
			<tr>
				<td><font class='n'>Fjalekalimi i ri: </font></td>
				<td><input class='n1' class="form_control" type='password' name='pword1' placeholder="Fjalekamimi i ri"/></td>
			<tr>
			<tr>
				<td><font class='n'>Rishkruaj Fjalekalimin e ri: </font></td>
				<td><input class='n1' class="form_control" type='password' name='pword2' placeholder="Fjalekamimi i ri"/></td>
			</tr>
			<tr>
				<td colspan="2" align='center' class='n'><center>
					<input type="submit" name='create' class="btn btn-danger" value='Ndrysho'/>
					<input type="submit" name='back' class="btn btn-info" value='Kthehu'/></center>
				</td>
			</tr>
			
	
			
		</td>	
		</tr>
		  
		</tbody>		
		</table>
		<div class="error"><?php echo "<h3 style='color:red;'>".(isset($error)? $error:" ")."</h3>"; ?></br></div>
	</form></center>
	</br></br></br></br></br></br></br></br></br></br></br></br></br>
	
	</div>
</body>

<script src="/Foleza/php/js/jquery-1.11.3.min.js"></script>
    <script src="/Foleza/php/js/foleza.min.js"></script>
	<script src="/Foleza/php/js/ie10-viewport-bug-workaround.js"></script>
	<script src="/Foleza/php/js/holder.min.js"></script>

</html>