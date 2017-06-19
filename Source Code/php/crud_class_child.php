<?php

require_once ("CRUD.php");
require_once ("Database_Class.php");
require_once ("child_class.php");

class crud_class_child implements CRUD
{
    private $db;
    private $connection;

    public function __construct()
    {
        $this->db=new Database();
        $this->connection=$this->db->connect_to_db();
    }
    
    
    public function create($child){

	
        $amza=$child->getAmza();
        $name=$child->getName();
        $surname=$child->getSurname();
        $bday=$child->getBday();
        $fname=$child->getFname();
		$mname=$child->getMname();
		$fwork=$child->getFwork();
		$mwork=$child->getMwork();
		$cno1=$child->getCno1();
		$cno2=$child->getCno2();
		$email=$child->getEmail();
		$city=$child->getCity();
		$street=$child->getStreet();
		$no=$child->getNo();
		$postno=$child->getPostno();
		$vaks=$child->getVaks();
		$aler=$child->getAler();
		$other=$child->getOther();
		$group=$child->getGroup();
		$uname=$child->getUname();
		$pword=$child->getPword();
		$feetyp =$child->getFeetyp();
		$feeam =$child->getFeeam();
		$feestatus =$child->getFeestatus();
		$level =$child->getLevel();
		
		
        $query="INSERT INTO femijet".
            "(Amza,Emri,Mbiemri,Datelindja,Atesia,Memesia,PunaeBabait,PunaeNenes,Kontakt1,Kontakt2,Email,Qyteti,Rruga,No,KodiPostar,Vaksinimi,Alergji,Tetjera,Grupi,EmriPerdoruesit,Fjalekalimi,LlojiPageses,Sasiapertupaguar,Statusi,Level)".
            "VALUES ('$amza','$name','$surname','$bday','$fname','$mname','$fwork','$mwork','$cno1','$cno2','$email', '$city','$street','$no','$postno','$vaks','$aler','$other','$group','$uname','$pword','$feetyp','$feeam','$feestatus','$level')";
			

			if (mysqli_query($this->connection, $query)) {
                return $m= "Your records are added successfully.";
            } else {
                return $m= "Something went wrong!";
            }
    }


    public function update($child){
        $name=$child->getName();
        $description=$child->getDescription();
        $amount=$child->getAmount();
        $price=$child->getPrice();
        $type=$child->getType();
        $id=$child->getId();
        $query = "UPDATE femijet SET name='$name',description='$description',amount='$amount',price='$price',type='$type' where id='$id'";
        

        if (mysqli_query($this->connection, $query)) {
            echo "Well done! Your records are added successfully.";
        } else {
            echo "Oh snap!Change a few things up and try submitting again.";
        }
    }

    public function read()
    {
        $query="SELECT * FROM femijet ";
        $result = $this->connection->query($query);
        return $result;
    }


    public function delete($amza)
    {
        $query = "DELETE FROM femijet WHERE Amza='$amza'";
        if (mysqli_query($this->connection, $query)) {
            echo "Well done! Your records are deleted successfully.";
        } else {
            echo "Oh snap!Change a few things up and try submitting again.";
        }
    }

}