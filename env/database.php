<?php

class GenericDatabase {

    protected $mysqli;

    private $servername;
    private $username;
    private $dbname;
    private $dbpassword;

    public function __construct(string $path) {
		include($path);

        $this->servername = $servername; 
    	$this->username = $username;
    	$this->dbpassword = $dbpassword;
    	$this->dbname = $dbname;
    }

/*
        $stmt = $mysqli->prepare("SELECT name FROM CATEGORY cat;");
        $stmt->execute();
        $stmt->bind_result($dId); 
        while($row = $stmt->fetch()) {
            echo $dId." ";
        }        
*/

    public static function fromString(string $email): self {
        return new self($email);
    }

    public function connect() {
		$this->mysqli = new mysqli($this->servername, $this->username, $this->dbpassword, $this->dbname);
		return $this->mysqli;  	
    }

    public function disconnect() {
    	mysqli_close($this->mysqli);
    }

    public function __toString(): string {
        return $this->servername;
    }

}

?>