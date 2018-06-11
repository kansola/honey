<?php
	session_start();
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	//error_reporting(E_ALL);


	require '../core/database/dbconnection.php';
    require '../core/functions/general.php';
    require '../core/functions/users.php';
    require '../core/functions/course.php';
    require '../core/functions/forum.php';
    require '../core/functions/assignment.php';
    require '../core/functions/test.php';
	
	//$_SESSION['id'] = '12';
	//$_SESSION['student_year'] = 4; 


 	// echo implode( get_year_courses_ids_array(1) , ', ' ) ;
?>