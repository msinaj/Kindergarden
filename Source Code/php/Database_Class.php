<?php
 	
 	define("DB_USER", "msinaj14");
 	define("DB_PASS", "ms518ora");
 	define("DB_NAME", "web16_msinaj14");
	define("DB_HOST", "localhost");

	class Database
	{

	private $Db_USER;
	private $Db_PASS;
	private $Db_HOST;
	private $Db_NAME;
	private $DB_connection;


    public function __construct()
    {

        $this->Db_USER = DB_USER;
        $this->Db_PASS = DB_PASS;
        $this->Db_HOST = DB_HOST;
        $this->Db_NAME = DB_NAME;
    }

	public function connect_to_db()
	{
		$this->DB_connection = mysqli_connect($this->Db_HOST, $this->Db_USER, $this->Db_PASS,$this->Db_NAME);
		
        if (mysqli_connect_errno()) {
            printf("Connect failed: %s\n", mysqli_connect_error());
            exit();
        }

        return $this->DB_connection;
    }


    public function __destruct()
    {
        if(is_resource($this->DB_connection)){
            mysqli_close($this->DB_connection);
        }
        unset($this->DB_connection);
    }

}
