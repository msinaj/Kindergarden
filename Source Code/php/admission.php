<?php

ob_start();
session_start();
require_once "Database_Class.php";
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
<title>Te regjistruar</title>
    
    <link href="css1/foleza.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css1/style3.css">
    <link href="css1/custom.css" rel="stylesheet">
    

<style>
body  {
    background-image: url("images/natyra.jpg");
    background-color: #cccccc;

}

.navbar-fixed-top{
	height: 60px;
}
.dbody{
	min-height:747px;
}

.panel-group{
	width:600px;
	background-color:rgba(217, 217, 217,0.6);
	margin: 50px 300px;
	position: center;
}
.panel-default{
	background-color:rgba(217, 217, 217,0.0);
}

 
</style>
</head>


<body>

 <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">

        <div class="container">
		<form  method='POST' action=''>
		 <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <p class="navbar-brand" >
                	<span class="glyphicon glyphicon-fire"></span> 
                	Foleza e Dijes
                </p>
            </div>
            
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="nav navbar-nav">
                  
                    <li>
					<input type="submit" name="teregjistruar" value="Te Regjistruar" class="navbuttons"/>
                       
                    </li>
					<li>
					<input type="submit" name="regjistro" value="Regjistro" class="navbuttons"/>
                    </li>
					<li>
					<input type="submit" name="tedhenat" value="Te Dhenat e Mia" class="navbuttons"/>
                    </li>
					<li>
					<input type="submit" name="ndryshopword" value="Ndrysho Fjalekalimin" class="navbuttons"/>
                    </li>
					<li>
					<input type="submit" name="logout" value="Dil" class="navbuttons"/>
                    </li>
					
					
					
			
                </ul>	
            </div>
		</form>
        </div>
    </nav>


	<div class="dbody">

	<?php 

$db=new Database();
$connection = $db->connect_to_db();

if(isset($_POST['teregjistruar'])) {


$sql = "SELECT * FROM femijet";
$result = $connection->query($sql);

if ($result->num_rows > 0) {
     // output data of each row
	 echo "<div class='container1'>".
  "<div class='panel-group' id='accordion'>".
  
    "<div class='panel panel-default'>".
      "<div class='panel-heading'>".
        "<h4 class='panel-title'>".
          "<a data-toggle='collapse' data-parent='#accordion' href='#collapse1'>Grupi 1</a>".
       " </h4>".
      "</div>".
      "<div id='collapse1' class='panel-collapse collapse in'>".
        "<div class='panel-body'>";
		 echo "<form method='POST' action=''><table align='center' class='acr'><tr><th>Numri i Amzes</th><th>Emri</th><th>Mbiemri</th><th>Datelindja</th></tr>";
     
	 while($row = $result->fetch_assoc()) {
		 if($row["Grupi"]=='1'){
		echo "<tr><td>" . $row["Amza"]."</td><td>". $row["Emri"]."</td><td>"
		 . $row["Mbiemri"]."</td><td>" . $row["Datelindja"]."</td></tr>";	 
		 }
         
		
	 }
	 echo "</table></form>".
		"</div>".
      "</div>".
    "</div>".
	
    "<div class='panel panel-default'>".
      "<div class='panel-heading'>".
        "<h4 class='panel-title'>".
          "<a data-toggle='collapse' data-parent='#accordion' href='#collapse2'>Grupi 2</a>".
        "</h4>".
      "</div>".
      "<div id='collapse2' class='panel-collapse collapse'>".
        "<div class='panel-body'>";
		 echo "<form method='POST' action=''><table align='center' class='acr'><tr><th>Numri i Amzes</th><th>Emri</th><th>Mbiemri</th><th>Datelindja</th></tr>";
     
	 $sql = "SELECT * FROM femijet";
$result = $connection->query($sql);
	 
	 
	 while($row = $result->fetch_assoc()) {
		 if($row["Grupi"]=='2'){
         echo "<tr><td>" . $row["Amza"]."</td><td>". $row["Emri"]."</td><td>"
		 . $row["Mbiemri"]."</td><td>" . $row["Datelindja"]."</td></tr>";
		 }
	 }
	 echo "</table></form>".
		"</div>".
      "</div>".
    "</div>".
	
    "<div class='panel panel-default'>".
      "<div class='panel-heading'>".
        "<h4 class='panel-title'>".
          "<a data-toggle='collapse' data-parent='#accordion' href='#collapse3'>Grupi 3</a>".
        "</h4>".
      "</div>".
      "<div id='collapse3' class='panel-collapse collapse'>".
        "<div class='panel-body'>";
		echo "<form method='POST' action=''><table align='center' class='acr'><tr><th>Numri i Amzes</th><th>Emri</th><th>Mbiemri</th><th>Datelindja</th></tr>";
     
	  $sql = "SELECT * FROM femijet";
$result = $connection->query($sql);
	 while($row = $result->fetch_assoc()) {
		 if($row["Grupi"]=='3'){
         echo "<tr><td>" . $row["Amza"]."</td><td>". $row["Emri"]."</td><td>"
		 . $row["Mbiemri"]."</td><td>" . $row["Datelindja"]."</td></tr>";
		 }
	 }
	 echo "</table></form>".
		"</div>".
      "</div>".
    "</div>".
	
  "</div>". 
"</div>";

} else {
     echo "No booklist available!";
}

$connection->close();
}	



if(isset($_POST["tedhenat"])) {

	$uname=filter_var($_SESSION['username'], FILTER_SANITIZE_STRING);
	$_SESSION['pageaddress']="admission.php";

	$sql = "SELECT * FROM stafi where Perdoruesi='$uname'";
	$row1 = $connection->query($sql);

if ($row1->num_rows > 0) {
	
	$row =  mysqli_fetch_array($row1);
	
	echo "<table align='center' class='tabl'><tr><td style='color:#663300;'><b>SSN:</b></td><td>" . $row["SSN"]."</td></tr><tr><td style='color:#663300;'><b>Emri:</b></td><td>"
	. $row["Emri"]."</td></tr><tr><td style='color:#663300;'><b>Mbiemri:</b></td><td>"
		 . $row["Mbiemri"]."</td></tr><tr><td style='color:#663300;'><b>E-mail:</b></td><td>" . $row["E-mail"]."</td></tr><tr><td style='color:#663300;'><b>Numri i Kontaktit:</b></td><td>"
		 . $row["Numri i Kontaktit"]."</td></tr><tr><td style='color:#663300;'><b>Emri i Perdoruesit: <b></td><td>". $row["Perdoruesi"]."</td></tr><tr><td style='color:#663300;'><b>Fjalekalimin</b></td><td>" 
		 . $row["Fjalekalimi"]."</td></tr><tr><td style='color:#663300;'><b>Pozicioni:</b></td><td>" . $row["Pozicioni"]."</td></tr><tr><td style='color:#663300;'><b>Qyteti:<b></td><td>" 
		 . $row["Qyteti"]. "</td></tr><tr><td style='color:#663300;'><b>Rruga:</b></td><td>" . $row["Rruga"]."</td></tr><tr><td style='color:#663300;'><b>Zona / Lagjia:<b></td><td>" 
		 . $row["Lagjia"]. "</td></tr><tr><td style='color:#663300;'><b>No.:</b></td><td>" . $row["No."]."</td></tr><tr><td style='color:#663300;'><b>Kodi Postar:<b></td><td>" 
		 . $row["Kodi Postar"]. "</td></tr><tr><td style='color:#663300;'><b>Statusi i Pages:</b></td><td>" . $row["Statusi i Pages"]. "</td></tr></table>";
	} else {
     echo "No data available!";
}

$connection->close();
}

if(isset($_POST["regjistro"])) {
	
    $_SESSION['pageaddress']="admission.php";
    header("Location: regjistrochild.php");
}

if(isset($_POST["ndryshopword"])) {
	$_SESSION['id']=$_SESSION['level'];
$_SESSION['pageaddress']="admission.php";
    header("Location: changepass3.php");
   
}

if(isset($_POST["logout"])) {
        session_destroy();
        session_unset();
        header("Location: login.php");
    } 


    ?>
	
	</div>
  

<footer>
		
        
        <div class="small-print">
        	<div class="container">
        	

        		<p style="color:rgb(0, 122, 204)"><a href="https://www.facebook.com/folezaedijes/">
        		<img src="images/facebook.jpg" style="width:20px;height:20px;">
        		</a> &nbsp; | &nbsp; <img src="images/cel.jpg" style="width:20px;height:20px;">
        		+ (355) 69 27 07 855 &nbsp; 
        		| &nbsp; <img src="images/email.jpg" style="width:20px;height:20px;"><a href="mailto:folezaedijes@gmail.com">folezaedijes@gmail.com</a></p>
        		<p style="color:rgb(0, 122, 204)">Copyright &copy; Foleza e Dijes </p>
        	</div>
        </div>
	</footer>

	
    
    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="js/foleza.min.js"></script>
	<script src="js/ie10-viewport-bug-workaround.js"></script>
	<script src="js/holder.min.js"></script>
	

</body>  
</html>