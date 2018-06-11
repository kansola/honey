<?php
	require 'initialise.php';

	  //$quiz =  find_by_id_from_table('test', $_GET['test_id']);

	 // $test_result = find_all_from_table('test_result', ['test_id'=> $_GET['test_id']] );

	  $no_students = get_no_students(9);
	  echo $no_students;


	  $no_students_pass = get_no_students_pass(9, 2);
	  									echo  $no_students_pass;

?>