<?php
   
	define('DB_SERVER',   'localhost');
	define('DB_USERNAME', 'root');
	define('DB_PASSWORD', 'tryagain');
	define('DB_DATABASE', 'emp');
   	class connection {
   	
			var $con;
   	   		public function __construct() {
   				$this->con = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
 			return $this->con;
   		}
   }
?>