<?php
class DatabaseConnect {
	private $dbUsername;
	private $dbPassword;
	private $dbConnect;
	private $dbHost;
	private $dbName;
	private $xml;
	function __construct() {

		try {
			if (file_exists("./xml/dbInformation.xml")) {
				$path = "./xml/dbInformation.xml";
				$xml  = simplexml_load_file($path);
			} else {
				echo "Falha ao carregar o arquivo \"dbInformation.xml\"";
			}
		} catch (Exception $ex) {
			echo "Error message: ".$ex->getMessage();
		}

		$this->dbUsername = $xml->dbUsername;
		$this->dbPassword = $xml->dbPassword;
		$this->dbHost     = $xml->dbHost;
		$this->dbName     = $xml->dbName;
	}

	public function getConnection() {
		try {
			if ($this->dbConnect != NULL) {
				$this->dbConnect = new PDO("mysql:dbname=$this->dbName;host=$this->dbHost", $this->dbUsername, $this->dbPassword);

			}
		} catch (Exception $ex) {
			echo "Error message: ".$ex->getMessage();
			echo " \nError code: ".$ex->getCode();
		}
	}

	public function closeConnection() {
		$this->dbConnect = NULL;
	}
}

$con = new DatabaseConnect;
$con->getConnection();