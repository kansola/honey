<?php
	include("core/init.php");
	 
	// echo 'loginProcess';
	//if(user_exists('diwaters') === true){

	//echo 'exists';
	//}

	//die();	
	
	if(empty($_POST) === false) {
		
		$username = $_POST['username'];
		$password = $_POST['password'];

			if(empty($username) === true || empty($password) ===true){
				$errors[] = 'You need to enter a username and password';

				//header('Location: login.php');
			}
			else if( user_exists($username) === false) {

				$errors[] = 'We can\'t find the username have u registered?';

			}else{

				$login = login($username,$password);
				if($login === false){

					$errors[] = "That username and password is incorrect";
				}else{
					//die($login);
					//set the user session
					//$_SESSION['id'] =$login;
					//header('Location: index.php');

					//exit();


					//------------------------------------------------

					$redirect = redirect($login);
					if($redirect === "lecturer"){

					$_SESSION['lecturer_id'] =$login;
					$_SESSION['lect_name'] = get_user_full_name_by_id($login);
					//echo $_SESSION['firstname'];
					 
					header('Location: lecturer/index.php');

					exit();

					}
					elseif($redirect === "student"){
						$_SESSION['id'] =$login;
						$_SESSION['student_name'] =get_user_full_name_by_id($login);
						$_SESSION['student_year'] =get_student_year($login);
						header('Location: student/index.php');

					exit();
					}

				}
			}

			
	}
	include("includes/layout/loginheader.php");

	if(empty($errors) === false){
?>
	<h2> We tried to log you in, but...</h2>
<?php
		echo output_errors($errors);

	}
	//include("includes/layout/loginheader.php");


	
	include("includes/layout/loginfooter.php");
	
?>
 