<?php
   
?>
<?php include('layout-header.php');?>
        <!-- BEGIN MAIN CONTENT -->
        <div id="main-content">
            <div class="row">
                <div class="col-lg-12">
                    


 
                    <h1>Add new lecturer</h1>
                    
                    <div class="panel panel-default">
                         <div class="panel-body">
                                <div class="row">
                                    <form method="POST">
                                        <div class="col-md-12 col-sm-12 col-xs-12">

                                            <div class="form-group">
                                                <label class="form-label"><strong>Title</strong>  </label> 
                                                <div class="controls">
                                                    <select class="form-control" name="title">
                                                        <option value="Mr.">Mr.</option>
                                                        <option value="Dr.">Dr.</option>
                                                        <option value="Mrs.">Mrs.</option>
                                                        <option value="Miss">Miss</option>
                                                        <option value="Prof.">Prof.</option>
                                                        
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="form-label"><strong>Last name*</strong></label> 
                                                <div class="controls">
                                                    <input type="text" class="form-control"  title ="requested format letters only" placeholder="e.g Boakye" name="lastname"  pattern="[A-Za-z]{1,30}" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label"><strong>First name*</strong></label> 
                                                <div class="controls">
                                                    <input type="text" class="form-control" title="requested format letters only" placeholder=" e.g Boakye" name="firstname" pattern ="[A-Za-z]{1,30}" required>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="form-label"><strong>Phone</strong> </label> 
                                                <div class="controls">
                                                    <input type="text" class="form-control" name="phone_no" pattern="[0-9]{10}" title ="requested format 10 digits only" placeholder ="e.g 0211111111" required>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="form-label"><strong>Email</strong> </label> 
                                                <div class="controls">
                                                    <input type="email" class="form-control" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>
                                                </div>
                                            </div>

                                            <hr />
                                            <h3>Login Details</h3>

                                            <div class="form-group">
                                                <label class="form-label"><strong>Username*</strong>
                                                </label> 
                                                <div class="controls">
                                                    <input type="text" class="form-control" name="username" title ="the length should be greater than or equal to 6" placeholder="e.g qw23ery7" pattern="[A-Za-z0-9]{6,30}" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label"><strong>Password*</strong> </label> 
                                                <div class="controls">
                                                    <input type="password" class="form-control" name="password" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" placeholder="*******" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
                                                </div>
                                            </div>
                                            
                                               
                                            <div class="form-group text-center">
                                                <button type="submit" name="submit" class="btn btn-danger">Submit</button>
                                                <button type="reset" class="btn btn-default">Cancel</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                        </div>

                    </div>
                </div>
            </div>
        <!-- END MAIN CONTENT -->
    
<?php include('layout-footer.php');?>