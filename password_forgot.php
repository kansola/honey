<?php 
include("core/init.php"); 

include("includes/layout/loginheader.php");

	if( isset($_POST['submit'])  ){
        
          if(empty($_POST['phone_no']) === true){
				$errors[] = 'You need to enter your phone number';
          		
			}
       
          else if(strlen($_POST['phone_no'])!==10 ){
                $errors[] ='Your phone number should be of length 10';
          		
            }
            
           else if(!is_numeric($_POST['phone_no'])){
               	 $errors[] ='Your phone number must be numeric';
                }
           else if(phoneno_exists($_POST['phone_no']) == false){
           		$errors[] = 'Enter the phone number you registered with';
           }
           else{
           		$_SESSION['phone_no'] = $_POST['phone_no'];
           		$num =$_POST['phone_no'];
           		$code = rand(10000,99999);
				      updateVerification($code,$_POST['phone_no']);

				// Code sent
				$api_key = '573895ec78ed8573895ec78f4c';
				$phone = $num ;
				$sender_id = 'VERIFY';

				$message = "Verification code is $code.";
				//$message = "Dear ".$send['firstname']." You have a quiz to take.It should be submitted before  ".$_SESSION['fb_date'];  
				//$phone ="$num";  
				$url = "http://sms.nasaramobile.com/api?api_key=$api_key&&sender_id=$sender_id&&phone=$phone&&message=".urlencode($message)."";
                 //send message and get response
                $response = @file_get_contents($url);
                if($response == '1801'){
                    $sms= "message sent successfully";
                }
                elseif($response == '1802') {
                    $sms= "message sending failed";
                }
                elseif($response == '1803') {
                    $sms= "invalid login phone or password given";
                }
                elseif($response == '1804') {
                    $sms= "not enough sms credit";
                }
                elseif($response == '1805') {
                   $sms="sender id must be more than 1 charater and less than 12 characters";
                }
                elseif($response == '1806') {
                   $sms= "phone number must be more than 8 characters";
                }
                    
           		header('Location:password_process.php');
           		

           }
         
    }
 
             
    



    if(empty($errors) === false){
?>
	<h2> We tried to change your password, but...</h2>
	<?php
		echo output_errors($errors);

	}
    ?>


 <body class="login fade-in" data-page="password">
    <!-- BEGIN PASSWORD BOX -->
    <div class="container" id="login-block">
        <div class="row">
            <div class="col-sm-6 col-md-4 col-sm-offset-3 col-md-offset-4">
                <div class="login-box clearfix animated flipInY">
                    <div class="page-icon animated bounceInDown">
                        <img src="assets/images/account/login-questionmark-icon.png" alt="Questionmark icon" />
                    </div>
                    <div class="login-logo">
                        P A S S W O R D F O R G O T
                    </div>
                    <hr />
                    <div class="login-form">
                        <!-- BEGIN ERROR BOX -->
                        <div class="alert alert-danger hide">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <h4>Error!</h4>
                            Your Error Message goes here
                        </div>
                        <!-- END ERROR BOX -->
                        <form method="post">
                            <p>Enter the phone number used for registration below and a five digit code will be sent to this number via text message.</p>
                            <input type="text" name="phone_no" placeholder="phone-no" class="input-field" required/>
                            <button type="submit" name ="submit" class="btn btn-login btn-reset">Reset password</button>
                        </form>
                        <div class="login-links">
                            <a href="login.html">Already have an account?  <strong>Sign In</strong></a>
                            <br>
                            <a href="signup.html"> Don't have an account? <strong>Sign Up</strong></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END PASSWORD BOX -->
    <!-- BEGIN MANDATORY SCRIPTS -->
    <script src="assets/plugins/jquery-1.11.js"></script>
    <script src="assets/plugins/jquery-migrate-1.2.1.js"></script>
    <script src="assets/plugins/jquery-ui/jquery-ui-1.10.4.min.js"></script>
    <script src="assets/plugins/bootstrap/bootstrap.min.js"></script>
    <!-- END MANDATORY SCRIPTS -->
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="assets/plugins/backstretch/backstretch.min.js"></script>
    <script src="assets/js/account.js"></script>
    <!-- END PAGE LEVEL SCRIPTS -->
</body>



</html>

