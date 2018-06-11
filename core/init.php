<?php

	session_start();
	//error_reporting(0);

	require 'database/dbconnection.php';
	require 'functions/general.php';
	require 'functions/users.php';
	require 'functions/course.php';

	if(logged_in() === true){

		$session_user_id = $_SESSION['id'];
		//grab all data u would need
		$user_data = user_data($session_user_id, 'id','title','firstname','lastname','email','username','hashed_password','index_no','user_type');

		//echo $user_data['username'];
	}

	// echo "init";
	$errors = array();
?>