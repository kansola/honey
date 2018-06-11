<?php

	function course_exists($coursename,$coursecode){

		$coursecode = sanitize($coursecode);
		$query = mysql_query("SELECT COUNT(`course_code`) FROM `courses` WHERE `course_name` = '$coursename' AND `course_code` ='$coursecode'");
		return (mysql_result($query, 0) == 1)? true :false;
	}


	function add_course($add_course){
		array_walk($add_course,'array_sanitize');
		$fields = '`' . implode('`, `', array_keys($add_course)) . '`';
		$data = '\'' . implode('\', \'', $add_course) . '\'';
		//echo $fields;
		//echo "INSERT INTO `courses` ($fields) VALUES ($data)";
		//die();
		mysql_query("INSERT INTO `courses` ($fields) VALUES ($data)");
	}
 
	function output_courses($id){
		$id = (int)$id;

		$result2 = mysql_query("SELECT `credit_hours`,`course_code`,`course_name`,`Description` from `courses` where `tutor_id` = $id");

		if(mysql_num_rows($result2)){

			echo '<table class="table table-bordered">';

			echo '<tr><th>CREDIT</th><th>COURSE CODE</th><th>COURSE NAME</th><th>DESCRIPTION</th></tr>';

			while($row2 = mysql_fetch_row($result2)){
				echo '<tr>';
			foreach($row2 as $key=>$value){
				echo '<td>', $value, '</td>';
			}
				echo '</tr>';
			}
				echo '</table><br />';
		}
	}

	function output_courses_nav($id){
		$id = (int)$id;
		global $row;

		$result2 = mysql_query("SELECT * from `courses` where `tutor_id` = $id");

	
		while($row = mysql_fetch_assoc($result2)){
				//global $id = $row['id'];
			//echo '<li><a href ="index.php"><span class ="sidebar_text">',$row['course_code'], '</span></a></li>';
				//echo '<li><a href =" index.php?course_id=',$row['id'],'">'.'<span class ="sidebar_text">',$row['course_code'], '</span></a></li>';
					//global $id = $row['id'];
			//echo '<li><a href ="course_page.php?course_id="><span class ="sidebar_text">',$row['course_code'], '</span></a></li>';
			echo '<li><a href ="course_page.php?course_id=',$row['id'],'"><span class ="sidebar_text">',$row['course_code'], '</span></a></li>';


			

		}
		//mysql_free_result($result2);
		//break;

	}


	function  get_student_year($id){

		$id = (int)$id;
	    return mysql_result(mysql_query("SELECT `student_year` FROM `users` WHERE `id` = '$id'"),0,'student_year');

	}

	function  get_course_info($id){

		$id = (int)$id;
	    $result = mysql_query("SELECT * FROM `courses` WHERE `id` = '$id'");

	    while($row = mysql_fetch_assoc($result)){

	    	echo '<h3>',$row['course_name'],'</h3><br>',$row['Description'];
	    }

	}


	function  get_course_year($id){

		$id = (int)$id;
	    $result = mysql_query("SELECT * FROM `courses` WHERE `id` = '$id' LIMIT 1");

	   $row = mysql_fetch_assoc($result);

	    return  $row['course_year'];	
	    

	}
        

        function  get_course_student($id){

		$ids = (int)$id;
	    $result = mysql_query("SELECT * FROM `users` WHERE `student_year` = '$ids' ");

                    $array_val=array();
	 while( $row = mysql_fetch_assoc($result)){
                      
                              array_push($array_val, $row);
	  	
	    
                          }
                          
                          
                          return  $array_val;
	}


	function  get_test_course($testid){

		$id = (int) $testid;
	    $result = mysql_query("SELECT * FROM `test` WHERE `id` = '$id' LIMIT 1");

	   $row = mysql_fetch_assoc($result);

	    return  $row['courseid'];	
	    

	}   


	function enter_announcement($announcement){
		array_walk($announcement,'array_sanitize');
		//$register_student['hashed_password'] = md5($register_student['hashed_password']);
		$fields = '`' . implode('`, `', array_keys($announcement)) . '`';
		$data = '\'' . implode('\', \'', $announcement) . '\'';
		//echo $fields;
		//echo "INSERT INTO `courses` ($fields) VALUES ($data)";
		//die();
		mysql_query("INSERT INTO `announcements` ($fields) VALUES ($data)");
		
	}

	function register_courses($id){

		$student_year = get_student_year($id);

		$result2 = mysql_query("SELECT `credit_hours`,`course_code`,`course_name` from `courses` where `course_year` = $student_year");

		if(mysql_num_rows($result2)){

			echo '<table class="table table-bordered">';

			echo '<tr><th>CREDIT</th><th>COURSE CODE</th><th>COURSE NAME</th></tr>';

			while($row2 = mysql_fetch_row($result2)){
				echo '<tr>';
			foreach($row2 as $key=>$value){
				echo '<td>', $value, '</td>';
			}
				echo '</tr>';
			}
				echo '</table><br />';
		}
	}

	function output_courses_stu_nav($id){
		$student_year = get_student_year($id);
		//$id = (int)$id;
		global $row;

		$result2 = mysql_query("SELECT * from `courses` where `course_year` = $student_year");

	
		while($row = mysql_fetch_assoc($result2)){
			//global $id = $row['id'];
		//echo '<li><a href ="index.php"><span class ="sidebar_text">',$row['course_code'], '</span></a></li>';
			//echo '<li><a href =" index.php?course_id=',$row['id'],'">'.'<span class ="sidebar_text">',$row['course_code'], '</span></a></li>';
				//global $id = $row['id'];
		echo '<li><a href ="',$row['course_name'],'.php"><span class ="sidebar_text">',$row['course_code'], '</span></a></li>';

	}
		//mysql_free_result($result2);
		//break;

	}

function find_courses_by_year($year){
	return find_all_from_table('courses', ['course_year'=> $year]);

}



function check_current_semester(){

     $result2 = mysql_query("SELECT * from `app_settings`");	

     $row = mysql_fetch_assoc($result2);

     $semester=$row['value'];

      return $semester;


}


function get_year_courses_ids_array($year)
{
	$yearCourses = find_courses_by_year($year);
	$idsArray = [];

	foreach ($yearCourses as $course ) {
		 $idsArray[] = $course['id'];
	}
	return $idsArray;
}

function find_lecturer_courses($lecturerId){
	return find_all_from_table('courses', ['tutor_id'=> $lecturerId]);
}

function get_course_name($courseId){
	$course = find_by_id_from_table('courses', $courseId);
	return $course['course_code'] . ' '. $course['course_name'];
}



?>