<?php 
	date_default_timezone_set("Asia/Kolkata");
	Class CrudModel {

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
			$this->query = "SELECT * FROM $table WHERE deleted_by IS NULL AND deleted_at IS NULL";
			$this->result = mysqli_query($this->conn, $this->query);
			while ($this->response[] = mysqli_fetch_object($this->result)) {
			}
			return array_filter($this->response);
		}

		public function insertData($data, $table) {

			$this->values = "'". implode("','", array_values($data)) ."'";

			$this->colName = "`".implode('`,`', array_keys($data))."`";

			$this->query = "INSERT INTO $table($this->colName) VALUES ($this->values )";

			$this->result = mysqli_query($this->conn, $this->query);

			$this->queryLogs = "INSERT INTO `logs`(`type`, `user_id`, `data_id`, `data`, `ip`) VALUES ('category_create','1','".$this->conn->insert_id."','".json_encode($data)."', '".$_SERVER['REMOTE_ADDR'] ."')";
			$this->resultLogs = mysqli_query($this->conn, $this->queryLogs);

			if ($this->result && $this->resultLogs) {
				return True;
			}
			else {
				return False;
			}
			
		}

		public function destroy($id, $table) {

			$this->query = "UPDATE $table SET `deleted_by`='1', `deleted_at` = '".date("Y-m-d H:i:s")."' WHERE id = '$id'";

			//$this->query = "DELETE FROM $table WHERE id = {$id}";
			$this->result = mysqli_query($this->conn, $this->query);

			$this->queryLogs = "INSERT INTO `logs`(`type`, `user_id`, `data_id`, `data`, `ip`) VALUES ('category_delete','1','".$id."','', '".$_SERVER['REMOTE_ADDR'] ."')";
			$this->resultLogs = mysqli_query($this->conn, $this->queryLogs);

			if ($this->result && $this->resultLogs) {
				return True;
			}
			else {
				return False;
			}

			return $this->result;
		}

		public function getDataById($id, $table) {

			$this->query = "SELECT * FROM $table WHERE id = {$id}";
			$this->result = mysqli_query($this->conn, $this->query);

			if ($this->result->num_rows>0) {
				$this->response = mysqli_fetch_object($this->result);
			} else {
				$this->response = array();
			}			

			return $this->response;
		}

		public function updateData($data, $id, $table) {

			$this->query = "UPDATE $table SET `name`='".$data['name']."',`slug`='".$data['slug']."', `updated_by` = '1', `updated_at`='".date("Y-m-d H:i:s")."' WHERE id = '$id'";
			$this->result = mysqli_query($this->conn, $this->query);

			return $this->result;

		}

	}
?>