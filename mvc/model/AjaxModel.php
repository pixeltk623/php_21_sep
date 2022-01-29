<?php 
	date_default_timezone_set("Asia/Kolkata");
	Class AjaxModel {

		private $serverName = "localhost";
		private $userName = "root";
		private $password = "";
		private $databaseName = "cepms";
		public $conn;
		public $query;
		public $result;
		public $response;
		public $queryLogs;

		public function __construct() {
			$this->dbConnect();
		}

		public function dbConnect() {
			$this->conn = mysqli_connect($this->serverName, $this->userName, $this->password, $this->databaseName);

			return $this->conn;
		}

		public function getAllCategories($table) {
			 // WHERE deleted_by IS NULL AND deleted_at IS NULL
			$this->query = "SELECT * FROM $table";
			$this->result = mysqli_query($this->conn, $this->query);
			while ($this->response[] = mysqli_fetch_object($this->result)) {
			}
			return array_filter($this->response);
		}

		

	}
?>