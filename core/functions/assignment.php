<?php
	function submitted_assignment($userid,$assignmentid){
			
			$query = mysql_query("SELECT COUNT(`id`) FROM `assignment_submission` WHERE `user_id` = '$userid' and `assignment_id` = '$assignmentid'");
			return (mysql_result($query, 0) == 1)? true :false;

		}
?>