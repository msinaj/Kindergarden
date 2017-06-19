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
<title>Regjistro</title>
   
    <link rel="stylesheet" href="css1/style3.css">
  
<style>
body  {
    background-image: url("images/natyra.jpg");
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
</style>


</head>
<body>



	<div>
	
	<center>
	<form method='POST' action='' >
	</br></br></br></br></br></br></br></br></br></br>
		<table align='center'>
		</br></br>
		<tbody>
		<tr>
		<td>
			
			<tr>
				<td><font>Emri i Perdoruesit: </font></td>
				<td><input class="form_control" type='text' name='uname' placeholder="uname"/></td>
			<tr>

			<tr>
				<td><font>Fjalekalimi i vjeter: </font></td>
				<td><input class="form_control" type='password' name='pword' placeholder="pword"/></td>
			<tr>
			<tr>
				<td><font>Fjalekalimi i ri: </font></td>
				<td><input class="form_control" type='password' name='pword1' placeholder="pword1"/></td>
			<tr>
			<tr>
				<td><font>Rishrkuaj Fjalekalimin e ri: </font></td>
				<td><input class="form_control" type='password' name='pword2' placeholder="pword2"/></td>
			</tr>
			<tr>
				<td colspan="2" align='center'><button class='button' name='create'>Ndrysho</button> <button class='button' name='back'>Kthehu</button></td>
		
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
    

    
    


</html>