<?php

// redirect to page
function redirect($page = FALSE, $message= NULL, $message_type = NULL){
	if(is_string($page)){
		$location = $page;
	}else {
		$location = $_SERVER['SCRIPT_NAME'];
	}

	// check for message
	if($message !=NULL){
		$_SESSION['message'] = $message;
	}

	// check type
	if($message_type !=NULL){
		$_SESSION['message'] = $message_type;
	}

	// redirect
	header('Location: '.$location);
	exit;
} 

// display message
function displayMessage(){
	if(!empty($_SESSION['message'])){

	// assign message
	$message = $_SESSION['message'];
	// assign var type
	if(!empty($_SESSION['message_type'])){
		$message_type = $_SESSION['message_type'];
		// create output
		if($message_type == 'error'){
		echo '<div class="alert alert-danger">'.$message.'</div>';
		}else{
		echo '<div class="alert alert-success">'.$message.'</div>';
		}
	}
	// unset message
	unset($_SESSION['message']);
	unset($_SESSION['message_type']);
	} else {
		echo '';
		
	}
}

