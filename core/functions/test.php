<?php

function question_answer_is_correct($questionId, $chosen_answer_alt){

	$question = find_by_id_from_table('test_questions', $questionId );

	if( $question['answer_alt'] == $chosen_answer_alt ){
		return true;
	}
	return false;
}


function submitted_test($userid,$testid){
			
	$query = mysql_query("SELECT COUNT(`id`) FROM `test_result` WHERE `user_id` = '$userid' and `test_id` = '$testid'");
	return (mysql_result($query, 0) == 1)? true :false;

		}
?>