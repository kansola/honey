
<?php
	// require '../database/dbconnection.php';
	function register_student($register_student){
		array_walk($register_student,'array_sanitize');
		$register_student['hashed_password'] = md5($register_student['hashed_password']);
		$fields = '`' . implode('`, `', array_keys($register_student)) . '`';
		$data = '\'' . implode('\', \'', $register_student) . '\'';
		//echo $fields;
		//echo "INSERT INTO `courses` ($fields) VALUES ($data)";
		//die();
		mysql_query("INSERT INTO `users` ($fields) VALUES ($data)");
		
	}

	function updateLecturer($username,$password,$id){
		$hashedpassword = md5($password);
		mysql_query("UPDATE users set `username` ='$username',`hashed_password` ='$hashedpassword' WHERE `id` ='$id'");
		//echo "UPDATE users set `username` ='$username',`hashed_password` ='$hashedpassword' WHERE `id` ='$id'";
		//die();

	}
	function updatePassword($password,$phoneno){
		$hashedpassword = md5($password);
		$phoneno = substr($phoneno,1);
		mysql_query("UPDATE users set `hashed_password` ='$hashedpassword' WHERE `phone_no` ='$phoneno'");
		//echo "UPDATE users set `username` ='$username',`hashed_password` ='$hashedpassword' WHERE `id` ='$id'";
		//die();

	}
	function updateVerification($verification_code,$phoneno){
		//$hashedpassword = md5($password);
		$phoneno = substr($phoneno,1);
		mysql_query("UPDATE users set `verification_code` ='$verification_code' WHERE `phone_no` ='$phoneno'");
		//echo "UPDATE users set `username` ='$username',`hashed_password` ='$hashedpassword' WHERE `id` ='$id'";
		//die();

	}

	function  user_data($id){//the function takes unlimited parameters and id is the first parameter we passed to the function
		$data = array();
		$id = (int)$id;

		$func_num_args = func_num_args();// it returns the number of arguments in the function
		//echo 'This is the number of arguments'.' '.$func_num_args;
		$func_get_args = func_get_args();//it gets the specified argument from a userdefined list
		//echo 'This is the data in argument 0'.' '.$func_get_args[0];
		if($func_num_args>1){
			unset($func_get_args[0]);//the unset function destroys specified variable e.g it destroyed the id argument

			$fields  ='`' . implode('`, `', $func_get_args) . '`';

			
			$data = mysql_fetch_assoc(mysql_query("SELECT $fields FROM `users` WHERE `id` =$id"));
			//$data = mysql_query("SELECT $fields FROM `users` WHERE `id` =$id");
			//print_r($data);
			//die();

			return $data;//it returns an array
		}



	}

	function logged_in(){

	 return (isset($_SESSION['id'])) ? true : false;

	}

	function user_exists($username){
		$username = sanitize($username);
		$query = mysql_query("SELECT COUNT(`id`) FROM `users` WHERE `username` = '$username'");
		return (mysql_result($query, 0) == 1)? true :false;

	}
	function phoneno_exists($phoneno){
		$phoneno = sanitize($phoneno);
		$phoneno = substr($phoneno,1);
		//echo $phoneno;
		$query = mysql_query("SELECT COUNT(`id`) FROM `users` WHERE `phone_no` = '$phoneno'");
		//$query = "SELECT COUNT(`id`) FROM `users` WHERE `phone_no` = '$phoneno'";
		//var_dump($query);
		return (mysql_result($query, 0) == 1)? true :false;

	}
	function verification_exists($verify){
		$verify = sanitize($verify);
		
		$query = mysql_query("SELECT COUNT(`id`) FROM `users` WHERE `verification_code` = '$verify'");
		//$query = "SELECT COUNT(`id`) FROM `users` WHERE `verification_code` = '$verify'";
		//var_dump($query);
		//die();
		return (mysql_result($query, 0) == 1)? true :false;

	}

	function email_exists($email){
		$email = sanitize($email);
		$query = mysql_query("SELECT COUNT(`id`) FROM `users` WHERE `email` = '$email'");
		return (mysql_result($query, 0) == 1)? true :false;

	}

	function id_from_username($username) {

		$username = sanitize($username);
		//id is the field that is returned
		return mysql_result(mysql_query("SELECT `id` FROM `users` WHERE `username` = '$username'"),0,'id');
 	}

	function login($username, $password){
		$id = id_from_username($username);
		
		$username = sanitize($username);
		$password = md5($password);

		return(mysql_result(mysql_query("SELECT COUNT(`id`) FROM `users` WHERE `username` = '$username' AND `hashed_password` = '$password' "),0)==1) ? $id:false;
		

	}

	function redirect($loginid){
		$id = $loginid;
		return mysql_result(mysql_query("SELECT `user_type` FROM users WHERE `id` = '$id'"),0,'user_type');

	}
	


	function authenticateAdmin($username, $password )
	{  
		global $connection;

		$password_hash = md5($password);

		$query= "	SELECT * FROM users 
					WHERE username = '{$username}' 
					and hashed_password = '{$password_hash}' 
					and user_type = 'admin' 
					LIMIT 1";
	        
        $result = mysqli_query($connection,$query);
 
        if( $result){
            // user exist 
            $user = mysqli_fetch_assoc($result); 
            return $user;
        }else{
        	die('not found');
        	return false;
        }
	}


	function get_user_full_name_by_id($user_id )
	{  
		global $connection;
  
		$query= "	SELECT * FROM users 
					WHERE id = '{$user_id}'   
					LIMIT 1";
	        
        $result = mysqli_query($connection,$query);
 
        if( $result){
            // user exist 
            $user = mysqli_fetch_assoc($result); 
            return $user['lastname'].' '.$user['firstname'];
        }else{
        	die('not found');
        	return false;
        }
	}


	function get_user_index_no_by_id($user_id )
	{  
		global $connection;
  
		$query= "	SELECT * FROM users 
					WHERE id = '{$user_id}'   
					LIMIT 1";
	        
        $result = mysqli_query($connection,$query);
 
        if( $result){
            // user exist 
            $user = mysqli_fetch_assoc($result); 
            return $user['index_no'];
        }else{
        	die('not found');
        	return false;
        }
	}

	



	

?>

