<?php

abstract class DatabaseHandler {

	protected ?mysqli $con = null;

    public function __construct(string $host, string $user, string $pass, string $db) {
		$this->con = new mysqli($host, $user, $pass, $db);
	}

	public function __destruct() {
		$this->con->close();
	}

}

?>