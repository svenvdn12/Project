<?php



abstract class DatabaseModel {

	protected ?mysqli $con = null;
	//protected ?PDO $con = null;
		
    public function __construct(string $host, string $user, string $pass, string $db) {
        $this->con = new mysqli($host, $user, $pass, $db);
        
        // Check connection
        if ($this->con->connect_error) {
            die('Database connection failed: ' . $this->con->connect_error);
        }
        
        // Set charset
        $this->con->set_charset('utf8mb4');
    }
	
	public function __destruct() {
		$this->con->close();
		//$this->con = null;
	}

}

?>