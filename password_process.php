<?php 
include("core/init.php"); 

include("includes/layout/loginheader.php");

    if( isset($_POST['submit'])  ){


        
        if(!is_numeric($_POST['verification_code'])){
                 $errors[] ='Your verification code must be numeric';
        }
        else if(strlen($_POST['verification_code'])!==5){
                $errors[] = "The verification code should a length of 5";
        }
       else if(verification_exists($_POST['verification_code']) == false){
               $errors[] = "Enter a valid verification code";
        }

        
        
        else if(strlen($_POST['hashed_password'])<6 && strlen($_POST['hashed_password'])>10){
                    $errors[]='Your password should not be lesser than 6 or greater than 10';
        }
        else if($_POST['hashed_password'] !== $_POST['confirm_password'] ){
                    $errors[]='Your password do not match';
        }
        else{
             updatePassword($_POST['hashed_password'],$_SESSION['phone_no']);
            echo 'Password updated successfully';
            
        }
       // else{
             //updatePassword($_POST['hashed_password'],$_SESSION['phone_no']);
            //echo 'successful';
       // }
         
    }
 
             
    



    if(empty($errors) === false){
        
?>
    <h2> We tried to change your password, but...</h2>
    <?php
        echo output_errors($errors);

    }
    ?>



<body class="login fade-in" data-page="login">
    <!-- BEGIN LOGIN BOX -->
    <div class="container" id="login-block">
        <div class="row">
            <div class="col-sm-6 col-md-4 col-sm-offset-3 col-md-offset-4">
                <div class="login-box clearfix">
                    
                    <div class="login-logo">
                        PASSWORD CHANGE
                    </div>
                    <hr>
                    <div class="login-form">
                        <!-- BEGIN ERROR BOX -->
                        <div class="alert alert-danger hide">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <h4>Error!</h4>
                            Your Error Message goes here
                        </div>
                        <!-- END ERROR BOX -->
                        <form method="post">
                            <input type="text"  name="phone_no" value=<?php echo $_SESSION['phone_no']?>  class="input-field form-control user"  />
                            <input type="text" placeholder="verification code" name="verification_code" class="input-field form-control password" required />
                            <input type="password" placeholder="password" name="hashed_password" class="input-field form-control password" required />
                            <input type="password" placeholder="confirm password" name="confirm_password" class="input-field form-control password" required />
                            <button type="submit" name="submit" class="btn btn-login">Change</button>
                            <a href="login.php"> Go to the login page </a>
                        </form>
                        
                        
                    </div>
                </div> 
            </div>
        </div>
    </div>
    <!-- END LOCKSCREEN BOX -->
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
