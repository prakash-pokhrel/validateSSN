<?php 

function get_status($ssn){

	//DATABASE CONNECTION FILE//
	DEFINE('DB_USER','root');
	DEFINE('DB_PASSWORD','');
	DEFINE('DB_HOST','localhost');
	DEFINE('DB_NAME','prakasp');

	$dbc=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME)
	OR die('Could Not Connect to My SQL'.mysqli_connect_error());

	$query = "SELECT * FROM tbl_ssn WHERE ssn = '$ssn'";
	$result = mysqli_query($dbc, $query);
	if(mysqli_num_rows($result) >0){

		return "true";

	}else{

		return "false";
	}

}


?>