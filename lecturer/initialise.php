<?php
	// ini_set('display_errors', 1);
	// ini_set('display_startup_errors', 1);
	// error_reporting(E_ALL);
  
	 session_start();
	require '../core/database/dbconnection.php';
    require '../core/functions/general.php';
    require '../core/functions/users.php';
    require '../core/functions/course.php';
    require '../core/functions/forum.php';
     require '../core/functions/quiz.php';
    // check if logged in
   	// if( !isset($_SESSION['lecturer_id']) ){
   	// 	// redirct the person to logout page
   	// }
	
?>