<?php 
	include"employeeClass.php";
		$empnames = new employee;
		$names = $empnames->showemp();
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Using Classes</title>
</head>
<body>
	<?php 

		while($name = mysqli_fetch_array($names)) {
			echo $name['empname'];
		}
	 ?>
</body>
</html>