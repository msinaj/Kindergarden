<?php
require_once "Database_Class.php";

class log_in_class 
{
    private $uname;
    private $pword;
    private $level;
	private $db;
	private $connection;

    public function __construct($uname,$pword)
    {
        $this->pword=$pword;
        $this->uname=$uname;
    }

    public function read_all()
    {
		//connect to database
		$this->db=new Database();
		$this->connection = $this->db->connect_to_db();
		$query="SELECT * FROM stafi";
        $readdatabase = $this->connection->query($query);
		
       //check if user exists
        if ($readdatabase->num_rows > 0) {
            while($row = $readdatabase->fetch_assoc()) {
                if($row["Perdoruesi"]==$this->uname && $row["Fjalekalimi"]==$this->pword) {
                    $this->level=$row["Niveli"];
                    return true;
                }
            }
        }
        return false;
    }

    public function getLevel()
    {
        return $this->level;
    }

}