<?php
	//because we are returning the variable the parameter is different
	function array_sanitize(&$item){
		$item = mysql_real_escape_string($item);
	}
	function sanitize($data){
		return mysql_real_escape_string($data);
	}

	function output_errors($errors){

		return '<ul><li>' . implode('</li><li>', $errors) . '</li></ul>';
		//return "<p style='color:red; text-align:center;'>".$errors."</p>";

	}

 

function redirect_to($url)
{
	header("Location: {$url}");
	exit; 
}

function youtubeEmbedCodeFromUrl($youtubeVideoUrl){
	return '<iframe width="420" height="315" src="'.$url.
	'" frameborder="0" allowfullscreen></iframe>';
}
 
function feedback_message($message="",$message_type="") {

	if( isset($_SESSION['fb_message']) && $message == '' ){
		$message = $_SESSION['fb_message'];
		$message_type = $_SESSION['fb_message_type'];
		
		unset($_SESSION['fb_message']);
		unset($_SESSION['fb_message_type']);
	}

	$alert_type = ($message_type == 'error')? 'danger': $message_type;

	if (!empty($message) && is_string($message)) { 

		return "<div  class=\"alert alert-{$alert_type}\">
			<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
			<strong>".ucfirst($message_type)." !</strong> {$message}</div>";

	}  
	
}
 

function datetime_to_text($datetime= null)
{	
	if(is_null($datetime)){
			return 'null date';
	}
	$unixdatetime = strtotime($datetime);
	 
	return strftime( "%a %b %d, %Y @%I:%M %p", $unixdatetime);
	// return strftime( "%a %b %d, %Y @%k:%M", $unixdatetime);
	
}

function datetime_to_date($datetime="")
{
	$unixdatetime = strtotime($datetime);
	return strftime( "%a %d %b, %Y", $unixdatetime);
}

function datetime_to_time($datetime="")
{
	$unixdatetime = strtotime($datetime);
	return strftime( "%I:%M %p", $unixdatetime);
}

function datetime_now()
{ // returns mysql datetime format for the time now
	$dt = time();
	$mysql_datetime = strftime("%Y-%m-%d %H:%M:%S",$dt);
	return $mysql_datetime;
}

function current_academic_year()
{   
	global $connection; 
	$query= "	SELECT value FROM app_settings 
				WHERE configuration = 'current_academic_year'   
				LIMIT 1";
        
    $result = mysqli_query($connection,$query);

    if( $result){
        // user exist 
        $data = mysqli_fetch_assoc($result); 
        return $data['value'] ;
    }else{
    	die('not found');
    	return false;
    }
}

function current_semester()
{
	global $connection; 
	$query= "	SELECT value FROM app_settings 
				WHERE configuration = 'current_semester'   
				LIMIT 1";
        
    $result = mysqli_query($connection,$query);

    if( $result){
        // data exist 
        $data = mysqli_fetch_assoc($result); 
        return $data['value'] ;
    }else{
    	die('not found');
    	return false;
    }
}


/*
*	DATABASE FUNCTIONS 
*/

function db_query($query){  

	global $connection;

    $result = mysqli_query($connection,$query); 

    if( $result){   
        return $result;
    }  
    die('not found '.$query .'<br />'.mysqli_error($connection) );
    return false; 
}

function find_all_from_table($table, $where = null){
	$query = "SELECT * FROM {$table} ";

	if( $where != null && is_array($where)){
 
		$cnt = 1;
		foreach ($where as $key => $value) {
			if($cnt == 1){ 
				$query .= "WHERE {$key} = '{$value}' ";
			}else{
				$query .= "AND {$key} = '{$value}' ";
			} 
			$cnt++; 
		}
	}

	$query .= "ORDER BY id DESC";
	// die($query);
	return db_query($query);
}



function find_by_id_from_table($table, $id){
	// $query = "SELECT * FROM {$table} WHERE id = '{$id}' LIMIT 1";
	// $record = db_query($query);
	// return array_shift($record);

	global $connection; 
	$query = "SELECT * FROM {$table} WHERE id = '{$id}' LIMIT 1"; 
        
    $result = mysqli_query($connection,$query);

    if( $result){ // data exist 
        return mysqli_fetch_assoc($result);  
    } 
    
	die('DB PROCESS ERROR <br /><br />'.$query .'<br /><br /><br />'.mysqli_error($connection) );
	return false; 
}

function find_by_id_from_quiz($table,$user_id, $id){
	// $query = "SELECT * FROM {$table} WHERE id = '{$id}' LIMIT 1";
	// $record = db_query($query);
	// return array_shift($record);

	global $connection; 
	$query = "SELECT * FROM {$table} WHERE test_id = '{$id}'  and user_id='{$user_id}' LIMIT 1"; 
        
    $result = mysqli_query($connection,$query);

    if( $result){ // data exist 
        return mysqli_fetch_assoc($result);  
    } 
    
	die('DB PROCESS ERROR <br /><br />'.$query .'<br /><br /><br />'.mysqli_error($connection) );
	return false; 
}

function insert_into_table($table, $data)
{ 	 
	array_walk($data,'array_sanitize');
	
	$fields = '`' . implode('`, `', array_keys($data)) . '`';
	$values = '\'' . implode('\', \'', $data) . '\''; 
	
	$query = "INSERT INTO {$table} ($fields) VALUES ($values)";
	//mysql_query($query);
		// die($query);
	db_query($query);

	global $connection;
    return mysqli_insert_id($connection); 
}


function update_table($table, $whereField, $whereValue, $dataArray)
{
	global $connection; 
	$query= "	SELECT value FROM app_settings 
				WHERE configuration = 'current_semester'   
				LIMIT 1";

	$query  = "UPDATE {$table} SET ";

	foreach ($dataArray as $field => $value) {
		$query .= "{$field} = '{$value}' "; 
	}

	$query .= "WHERE {$whereField} = '{$whereValue}'  ";
        

    $result = mysqli_query($connection,$query);

    if( $result){
        return true;
    }else{
    	die('update failed: '.$query);
    	return false;
    }
}



/*function update_courses($table, $whereField, $whereValue, $dataArray){
		array_walk($add_course,'array_sanitize');
		$fields = '`' . implode('`, `', array_keys($add_course)) . '`';
		$data = '\'' . implode('\', \'', $add_course) . '\'';
		//echo $fields;
		//echo "INSERT INTO `courses` ($fields) VALUES ($data)";
		//die();
		mysql_query("INSERT INTO `courses` ($fields) VALUES ($data)");
	}


// function find_field_from_table_by_id($value='')
// {
// 	# code...
// }**/

?>