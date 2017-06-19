<?php

ob_start();
session_start();
include_once("child_class.php");
include_once("Validating.php");
include_once("crud_class_child.php");
if (!isset($_SESSION['username']))
{
  echo "<script>window.location.assign('login.php')</script>";
}
	if(isset($_POST['back'])) {
		$home=$_SESSION['pageaddress'];
		header("Location: $home");
	}
	$error="";
	if(isset($_POST['create'])) {
	
		if(!empty($_POST['amza'])&&!empty($_POST['emri'])&&!empty($_POST['mbiemri'])
			&&!empty($_POST['bday'])&&!empty($_POST['babai'])&&!empty($_POST['pbabit'])&&!empty($_POST['nena'])
		&&!empty($_POST['pnenes'])&&!empty($_POST['nr1'])&&!empty($_POST['nr2'])&&!empty($_POST['email'])
		&&!empty($_POST['qyteti'])&&!empty($_POST['rruga'])&&!empty($_POST['no'])
		&&!empty($_POST['posta'])&&!empty($_POST['vaksina'])&&!empty($_POST['alergji'])&&!empty($_POST['ttjera'])
		&&!empty($_POST['grupi'])&&!empty($_POST['pname'])&&!empty($_POST['pword'])&&!empty($_POST['feetype'])
		&&!empty($_POST['feeam'])&&!empty($_POST['feestatus'])&&!empty($_POST['level'])){
			
			
			$amza=$_POST['amza'];
			$name=$_POST['emri'];
			$surname=$_POST['mbiemri'];
			$bday=$_POST['bday'];
			$fname=$_POST['babai'];
			$fwork=$_POST['pbabit']; 
			$mname=$_POST['nena'];
			$mwork=$_POST['pnenes'];
			$cno1=$_POST['nr1'];
			$cno2=$_POST['nr2'];
			$email=$_POST['email'];
			$city=$_POST['qyteti'];
			$street=$_POST['rruga'];
		
			$no=$_POST['no'];
			$postno=$_POST['posta'];
			$vaks=$_POST['vaksina'];
			$aler=$_POST['alergji'];
			$other=$_POST['ttjera'];
			$group=$_POST['grupi'];
			$uname=$_POST['pname'];
			$pword=$_POST['pword']; 
			$feetyp=$_POST['feetype'];
			$feeam=$_POST['feeam'];
			$feestatus=$_POST['feestatus'];
			$level=$_POST['level']; 
			
			
			$child=new child_class($amza,$name,$surname,$bday,$fname,$mname,$fwork,$mwork,$cno1,$cno2,$email, $city,$street,$no,$postno,$vaks,$aler,$other,$group,$uname,$pword,$feetyp,$feeam,$feestatus,$level);
			
			$vali=new validating();
			$validate=array("success"=>true, "message"=>"");
			$validate=$vali->validate($child);
			
			
			
			if($validate["success"]){
				
						$ch=new crud_class_child();
						$result=$ch->read();
						$flag=true;
						while($row = $result->fetch_assoc()) {
						
							if($row['Emri']==$name&&$row['Mbiemri']==$surname&&$row['Amza']==$amza){		
								$error.="This children is already registered!";
								$flag=false;
								break;
							}
							
						}
						if($flag){
							$error=$ch->create($child);
						}
					
			}else{
				$error.=$validate["message"];
			}
			
			
		}else{
			// $amza;$name; $surname;$bday; $fname;$mname; $fwork;$mwork; $cno1;$cno2; $email;$city;$street;$a;$no;$postno;$vaks;$aler; $other;$group;$uname;$pword;$feetyp;$feeam;$feestatus; $level;
	$error.="You must fill in all of the fields";
			
			
		}

			
	}


?>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Regjistro</title>
    
    <link href="css1/foleza.min.css" rel="stylesheet">
    <link href="css1/custom.css" rel="stylesheet">
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
	<form method='POST' action='' class="new">
		<table align='center'>
		</br></br>
		<tbody>
		<tr>
		<td>
			<tr>
				<td><font>Amza: </font></td>
				<td><input class="form_control" type='text' name='amza'/></td>
			<tr>
			
			<tr>
				<td><font>Emri: </font></td>
				<td><input class="form_control" type='text' name='emri' /></td>
			<tr>
			
			<tr>
				<td><font>Mbiemri: </font></td>
				<td><input class="form_control" type='text' name='mbiemri'/></td>
			<tr>
			
			<tr>
				<td><font>Datelindja: </font></td>
				<td><input class="form_control" type='date' name='bday' /></td>
			<tr>
			
			<tr>
				<td><font>Atesia: </font></td>
				<td><input class="form_control" type='text' name='babai' /></td>
			<tr>
			
			<tr>
				<td><font>Puna e te Atit: </font></td>
				<td><input class="form_control" type='text' name='pbabit' /></td>
			<tr>
			
			
			<tr>
				<td><font>Memesisa: </font></td>
				<td><input class="form_control" type='text' name='nena' /></td>
			<tr>
			
			<tr>
				<td><font>Puna e se Emes: </font></td>
				<td><input class="form_control" type='text' name='pnenes'/></td>
			<tr>
			
			<tr>
				<td><font>Nr. Kontaktit 1: </font></td>
				<td><input class="form_control" type='text' name='nr1'/></td>
			<tr>
			
			<tr>
				<td><font>Nr. Kontaktit 2: </font></td>
				<td><input class="form_control" type='text' name='nr2' /></td>
			<tr>
			
			<tr>
				<td><font>E-mail: </font></td>
				<td><input class="form_control" type='email' name='email' /></td>
			<tr>
		</td>
		<td>
			<tr>
				<td><font>Qyteti: </font></td>
				<td><input class="form_control" type='text' name='qyteti' /></td>
			<tr>
			<tr>
				<td><font>Rruga: </font></td>
				<td><input class="form_control" type='text' name='rruga'/></td>
			<tr>
			
			
			<tr>
				<td><font>No.: </font></td>
				<td><input class="form_control" type='number' name='no' /></td>
			<tr>
			
			<tr>
				<td><font>Kodi Postar: </font></td>
				<td><input class="form_control" type='number' name='posta' /></td>
			<tr>
			
			<tr>
				<td><font>Vaksinimi: </font></td>
				<td><input class="form_control" type='text' name='vaksina' /></td>
			<tr>
			
				<td><font>Alergji: </font></td>
				<td><input class="form_control" type='text' name='alergji' /></td>
			<tr>
			
			<tr>
				<td><font>Te tjera: </font></td>
				<td><input class="form_control" type='text' name='ttjera' /></td>
			<tr>
			
			<tr>
				<td><font>Grupi: </font></td>
				<td><input class="form_control" type='text' name='grupi' /></td>
			<tr>
			
			<tr>
				<td><font>Emri i Perdoruesit: </font></td>
				<td><input class="form_control" type='text' name='pname' /></td>
			<tr>
			<tr>
				<td><font>Fjalekalimi: </font></td>
				<td><input class="form_control" type='password' name='pword' /></td>
			<tr>
			<tr>
				<td><font>Lloji i pageses: </font></td>
				<td><input class="form_control" type='text' name='feetype' /></td>
			<tr>
			<tr>
				<td><font>Sasia per t'u paguar: </font></td>
				<td><input class="form_control" type='number' name='feeam' /></td>
			<tr>
			<tr>
				<td><font>Statusi: </font></td>
				<td><input class="form_control" type='text' name='feestatus' /></td>
			<tr>
			<tr>
				<td><font>Niveli: </font></td>
				<td><input class="form_control" type='number' name='level' placeholder='5'/></td>
			<tr>
		
			
			<tr>
				<td colspan="2" align='center'><button class='button' name='create'>Regjistro</button> <button class='button' name='back'>Kthehu</button></td>
		
			</tr>
		</td>	
		</tr>
		</tbody>		
		</table>
		
		<div><?php echo "<h3 style='color:red;'>".(isset($error)? $error:" ")."</h3>"; ?></br></div>
	</form></center>
	
	</div>
</body>

    
    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="js/foleza.min.js"></script>
	<script src="js/ie10-viewport-bug-workaround.js"></script>
	<script src="js/holder.min.js"></script>


</html>