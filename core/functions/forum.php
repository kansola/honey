<?php

function count_forum_discussion($forumId){
	$query = "SELECT count(*) as count FROM `forum_discussions` where forum_id='{$forumId}'";
	$result = db_query($query);
	$record = mysqli_fetch_assoc($result);
	return $record['count'];
}