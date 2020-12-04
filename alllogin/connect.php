<?php  

	$severname = "localhost";
	$username = "root";
	$password = "";

	$con = new mysqli($severname,$username,$password);

	$db = mysqli_select_db($con,'dethimau');

	if($db == null)
		echo "Không chọn được Database";

?>