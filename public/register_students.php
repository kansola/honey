<?php 
 include("../includes/layout/loginheader.php");

include("../core/init.php");


 if( isset($_POST['submit'])  ){
        

        if(user_exists($_POST['username'])===true){

                    //$_SESSION['fb_message']= 'Sorry, the username \'' . $_POST['username'] . '\' is already taken.';
                    //$_SESSION['fb_message_type'] = 'error';
                    $errors[]='Sorry, the username \'' . $_POST['username'] . '\' is already taken.';
                
                }

           else if(phoneno_exists($_POST['phone_no'])===true){

                     //$_SESSION['fb_message']= 'Sorry, the phone number\'' . $_POST['phone_no'] . '\' already exists.';
                    //$_SESSION['fb_message_type'] = 'error';
                    $errors[]='Sorry, the phone no \'' . $_POST['phone_no'] . '\' already exists.';
                
                }

                else if( email_exists($_POST['email'])===true){

                    // $_SESSION['fb_message']= 'Sorry, the email address\'' . $_POST['email'] . '\'  already exists.';
                    //$_SESSION['fb_message_type'] = 'error';
                    $errors[]='Sorry, the email \'' . $_POST['email'] . '\'  already existd.';
                
                }

               else if($_POST['hashed_password'] !== $_POST['confirmpassword'] ){
                    $errors[]='Your password do not match';
                }


                else{

                    if(empty($_POST)===false && empty($errors)===true){
                    $register_student = array(
                        'firstname'     =>$_POST['firstname'],
                        'lastname'     =>$_POST['lastname'],
                        'username'    =>$_POST['username'],
                        'hashed_password'    =>$_POST['hashed_password'],
                        'email'           =>$_POST['email'],
                        'phone_no'       =>$_POST['phone_no'],
                        'index_no'       =>$_POST['index_no'],
                        'user_type'       =>$_POST['user_type'],
                        'student_year'       =>$_POST['student_year']
                        );
                    register_student($register_student);
               

                }
               
        
         
    }
}
?>
 <body>
    <?php
                if(empty($_POST)===false && empty($errors)===true){
                    $register_student = array(
                        'firstname'     =>$_POST['firstname'],
                        'lastname'     =>$_POST['lastname'],
                        'username'    =>$_POST['username'],
                        'hashed_password'    =>$_POST['hashed_password'],
                        'email'           =>$_POST['email'],
                        'phone_no'       =>$_POST['phone_no'],
                        'index_no'       =>$_POST['index_no'],
                        'user_type'       =>$_POST['user_type'],
                        'student_year'       =>$_POST['student_year']
                        );
                    register_student($register_student);
                    //redirect
                    //exit

                }
            ?>
    <form action ="" method="post">
        
        <!-- <table>
            <tr>
                <td>Firstname*<br>
                <input type="text" name="firstname" placeholder="firstname">
                </td>
                
                <td>Lastname*<br>
                <input type="text" name="lastname" placeholder="lastname">
                </td>
            </tr>


            <tr>
                <td>Username*<br>
                <input type="text" name="username" placeholder="username">
                </td>
                
                <td>Password*<br>
                <input type="password" name="hashed_password" placeholder="password">
                </td>
            </tr>

            <tr>
                <td>Confirm Password*<br>
                <input type="password" name="confirmpassword" placeholder="confirmpassword">
                </td>
                
                <td>Email Address*<br>
                <input type="text" name="email" placeholder="email">
                </td>
            </tr>

            <tr>
                <td>PhoneNumber<br>
                <input type="text" name="phone_no" placeholder="0260919980">
                </td>
                
                <td>Index Number*<br>
                <input type="text" name="index_no" placeholder="1114613">
                </td>
            </tr>

            <tr>
                <td>User Type<br>
                <select name ="user_type">
                            <option value = "student" selected>student</option>
                            
                        </select>
                </td>
                
                <td>Year*<br>
                    <select name ="student_year">
                            <option value = "1" selected>1</option>
                            <option value = "2">2</option>
                            <option value = "3">3</option>
                            <option value = "4">4</option>
                            <option value = "5">5</option>
                            <option value = "6">6</option>
                        </select>
                </td>
            </tr>

            </table>

            <br/>
            <input type="submit" value="Submit"/> -->

<div class="container-fluid">
    <div class="row">
        <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 img-thumbnail">
            <h1 class="text-center"> Student Registration </h1><br/>

            
                         <?php

                                if(  isset($_POST['submit'])&& empty($errors)===true){
                                        $success = 'Student registration successful';
                                    echo "<p style='color:red; text-align:center;'>".$success."</p>";

                                }
                             else{
                                    echo  output_errors($errors);
                            }
                        ?>
            
            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="text-muted">First Name*: </label>
                                            <!--<input type="text" class="form-control" placeholder="Enter first name here" 

name="firstname" required="true">-->
                                            <input type="text" class="form-control" title="requested format letters only" 

placeholder=" e.g Boakye" name="firstname" pattern ="[A-Za-z]{1,30}" required>
                                     </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="text-muted">Last Name*: </label>
                                            <!--<input type="text" class="form-control" placeholder="Enter last name here" 

name="lastname" required="true">-->
                                            <input type="text" class="form-control" title="requested format letters only" 

placeholder=" e.g Boakye" name="lastname" pattern ="[A-Za-z]{1,30}" required>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                         <label class="text-muted">Email*: </label>
                                            <!--<input type="email" class="form-control" placeholder="Enter email address here" 

name="email" required="true">-->
                                             <input type="email" class="form-control" name="email" pattern="[a-z0-9._%+-]+@[a-z0-

9.-]+\.[a-z]{2,3}$" required>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                     <div class="form-group">
                                        <label class="text-muted">Username*: </label>
                                             <!--<input type="text" class="form-control" placeholder="Enter prefered username" 

name="username" required="true">-->
                                            <input type="text" class="form-control" name="username" title ="the length should be 

greater than or equal to 6" placeholder="e.g qw23ery7" pattern="[A-Za-z0-9]{6,30}" required>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="text-muted">Phone Number: </label>
                                            <!--<input type="tel" class="form-control" placeholder="Enter phone number here" 

name="phone_no">-->
                                            <input type="text" class="form-control" name="phone_no" pattern="[0-9]{10}" title 

="requested format 10 digits only" placeholder ="e.g 0211111111" required>
                                    </div>
                                </div>


                                <div class="col-sm-6">
                                    <div class="form-group">
                                         <label class="text-muted">Index Number*: </label>
                                            <!-- <input type="number" class="form-control" placeholder="Enter index number here" 

name="index_no" required="true">-->
                                            <input type="text" class="form-control" name="index_no" pattern="[0-9]{7}" title 

="requested format 7 digits only" placeholder ="e.g 1111111" required>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                         <label class="text-muted">Year*: </label>
                                            <select name="student_year" class="form-control">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                            </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="text-muted">Password*: </label>
                                     <!--<input type="password" class="form-control" name="hashed_password" required="true">-->
                                     <input type="password" class="form-control" name="hashed_password" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" placeholder="*******" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                                 <label class="text-muted">Retype Password*: </label>
                                     <input type="password" class="form-control" name="confirmpassword" required="true">
                                    </div>
                                </div>

                            </div>

                            <div class="hidden">
                                <input type="hidden" name="user_type" value="student">
                            </div>

                            <div class="form-group">
                                <input class="btn btn-primary" name="submit" type="submit" value="Register"></input>

                                <a href="../login.php"> Go to the login page </a>
                            </div>

                               

                </div>
            </div>
        </div>
        
        


    
               
    </form>
</body>
</html>