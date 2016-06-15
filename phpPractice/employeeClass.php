<?php 
	include"config.php";

	
 	class employee extends connection {
 		var $empname;
 		var $empid;
 		
 		public function showemp() {
 			$query = mysqli_query($this->con,'select * from emptbl');
 			//$result= mysqli_fetch_array($query);
 			return($query);
 		}
 		public function addemp($a,$b) {
 			$query->mysqli_query($conn,'insert into emptbl($a,$b)');
 		}
 	}
 ?>