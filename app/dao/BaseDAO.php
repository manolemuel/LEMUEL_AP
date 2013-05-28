<?php

class BaseDAO {
	
	protected $user = "root";
	protected $password = "";
	protected $dbname = "AIRLINES";
	protected $dbh = null;

	function openCon(){
		$this->con = new PDO("mysql:host=localhost;dbname=" . $this->dbname, $this->user, $this->password);
	}

	function closeCon(){
		$this->con = null;
	}

}
?>
