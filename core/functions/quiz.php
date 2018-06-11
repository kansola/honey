<?php
	function get_student_score($user_id,$test_id)
	{
		global $connection;

		$query ="	SELECT * FROM test_result
				  	WHERE user_id = '{$user_id}' AND test_id = '{$test_id}'
				  	LIMIT 1";
		$result = mysqli_query($connection,$query);

		if($result){

			$student = mysqli_fetch_assoc($result);
			return $student['score'];
		}else{
			die('not found');
        	return false;
		}



	}


	function get_no_students($test_id)
	{
		global $connection;


		$query ="	SELECT COUNT(*) FROM test_result
				  	WHERE  test_id = $test_id";
		$result = mysqli_query($connection,$query);
		if($result){
			$rowcount = mysqli_num_rows($result);

			return mysqli_fetch_assoc($result)['COUNT(*)'];
		}
	}
	

	function get_no_students_pass($test_id,$passmark)
	{
		global $connection;

		$query ="	SELECT COUNT(*) FROM test_result 
					WHERE test_id =$test_id AND score>=$passmark";
		$result = mysqli_query($connection,$query);

		if($result){

			$rowcount = mysqli_num_rows($result);
			return mysqli_fetch_assoc($result)['COUNT(*)'];
		}
	}


	function get_no_students_fail($test_id,$passmark)
	{

		global $connection;

		$query =	"SELECT COUNT(*) FROM test_result
					WHERE test_id =$test_id AND score<$passmark";

		$result = mysqli_query($connection,$query);

		if($result){

			$rowcount = mysqli_num_rows($result);
			return mysqli_fetch_assoc($result)['COUNT(*)'];
		}
	}

	
		
			
		

		

	






?>