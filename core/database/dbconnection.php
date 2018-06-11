<?php
	//session_start();
	
	//create a database connection
	mysql_connect('localhost','root','') or die(mysql_error());
	mysql_select_db('classannex');


	//create a database connection object
	$servername="localhost";
	$username="root";
	$password="";
	 
	//create connection
	$connection = new mysqli($servername,$username,$password);

	// test if connection occured.
	if ($connection->connect_error) {
		die("databse connection failed: " . $connection->conect_error );   
	}  

	$query ="USE classannex";
	$result=mysqli_query($connection, $query);
	if (!$result){
		die("error	db select failed.");
	}


	if( isset($_POST) ){
		$_POST = array_map('trim', $_POST);
	}
?>