<?php  
include 'func_connect.php';
//Process client request (Via Url)
header("Content-Type:text/plain");

	if(!empty($_GET['ssn'])){

		$ssn = $_GET['ssn'];

		//check if - is contained
		if(strpos($ssn, '-')==false){

			deliver_response(401, "Unauthorised request");

		}else{

		$status_message = get_status($ssn);
		deliver_response(200, $status_message);

		}

	}else{

		//throw invalid request
		deliver_response(400, "Invalid Request");

	}

	function deliver_response($status, $status_message){

		header("HTTP/1.1 $status $status_message");

		$response['status'] = $status;
		$response['Response'] = $status_message;

		$json_response = json_encode($response);

		echo $json_response;

	}
?>