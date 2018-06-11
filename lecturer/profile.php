




<!-- BEGIN MAIN CONTENT -->
        <div id="main-content">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Lecturer Profile</h1>
                    
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                         <h3 class="panel-title"><strong>Lecturer</strong> Profile</h3>
                                                    </div>
                                                        <div class="panel-body">
                                                            <div class="row">
                                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                                     <div class="form-group">
                                                                            <label class="form-label"><strong>Name</strong></label>
                                                                            
                                                                            <div class="controls">
                                                                                <input type="text" class="form-control" value= "">
                                                                            </div>
                                                                     </div>
                                                                        <div class="form-group">
                                                                            <label class="form-label"><strong>Email Address</strong>
                                                                            </label>
                                                                            
                                                                            <div class="controls">
                                                                                <input type="text" class="form-control" value="">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label class="form-label"><strong>Phone number</strong>
                                                                            </label>
                                                                            
                                                                            <div class="controls">
                                                                                <input type="text" class="form-control" value="">

                                                                                <a href="#change"> Update username/Password </a>
                                                                         </div>
                                                                        </div>
                                                                        
                                                                </div>
                                                            </div>
                                                        </div>
                                                </div>
                                            </div>
                
                                        </div>

                                </div>



                                <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                         <h3 class="panel-title"><strong>Update</strong>Username/Password</h3>
                                                    </div>
                                                        <div  id = "change" class="panel-body">
                                                            <div class="row">
                                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                                    <form method ="post">
                                                                        <div class="form-group">
                                                                            <label class="form-label"><strong>Username*</strong></label>
                                                                            
                                                                            <div class="controls">
                                                                                <input type="text" class="form-control" name="username" required>
                                                                            </div>
                                                                         </div>
                                                                        <div class="form-group">
                                                                            <label class="form-label"><strong>Password*</strong>
                                                                            </label>
                                                                            
                                                                            <div class="controls">
                                                                                <input type="Password" class="form-control" name="hashed_password" required >
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label class="form-label"><strong>Confirm Password*</strong>
                                                                            </label>
                                                                            
                                                                            <div class="controls">
                                                                                <input type="Password" class="form-control" name="confirmpassword" required>

                                                                                
                                                                         </div>
                                                                        </div>

                                                                        <div>
                                                                        <button class="btn btn-primary m-b-10"  name ="submit" onclick="javascript:$('#form1').parsley('validate');">Submit</button>
                                                                        <button type="reset" class="btn btn-default m-b-10">Clear</button>
                                                                        </div>


                                                                       
                                    
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                </div>
                                            </div>
                
                                        </div>

                                </div>

                            </div>
                        </div>

                    </div> 

                </div>
            </div>
        </div>

<?php include('layout-footer.php');?>