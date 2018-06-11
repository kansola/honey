
<?php include('layout-header.php');?>
        <!-- BEGIN MAIN CONTENT -->
        <div id="main-content">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Add new course</h1>
                    
                    <div class="panel panel-default">
                         <div class="panel-body">
                                <div class="row">
                                    <form method="POST">
                                        <div class="col-md-12 col-sm-12 col-xs-12">

                                            <div class="form-group">
                                                <label class="form-label"><strong>Course*</strong></label>
                                                <span class="tips"> like "COMPUTER SECURITY"</span>
                                                <div class="controls">
                                                    <input type="text" class="form-control" name="coursename" title ="requested format letters and numbers only" pattern="[A-Za-z0-9]{1,30}" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label"><strong>Course Code*</strong>
                                                </label>
                                                <span class="tips">like "CSM 494"</span>
                                                <div class="controls">
                                                    <input type="text" class="form-control" name="coursecode" title ="requested format letters and numbers only" pattern="[A-Za-z0-9]{1,30}" required>
                                                </div>
                                            </div>
                                            <!--<div class="form-group">
                                                <label class="form-label"><strong>Credit Hours*</strong>
                                                </label>
                                                <span class="tips">like "4"</span>
                                                <div class="controls">
                                                    <input type="number" value='3' min='1' max="6" class="form-control" 
                                                    name="credithours" required>
                                                </div>
                                            </div>-->
                                            
                                            <div class="form-group">
                                                <label class="form-label"><strong>Credit Hours*</strong>
                                                </label>
                                                <span class="tips">like "4"</span>
                                                <div class="controls">
                                                    <select class="form-control" name="credithours">
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                    </select>
                                                </div>
                                            </div>
                                                

                                                <div class="form-group">
                                                <label class="form-label"><strong>Year*</strong>
                                                </label>
                                                <span class="tips">like "4"</span>
                                                <div class="controls">
                                                    <select class="form-control" name="year">
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="form-label"><strong>Semester*</strong>
                                                </label>
                                                <span class="tips">like "one"</span>
                                                <div class="controls">
                                                    <select class="form-control" name="semester">
                                                        <option value ="first">first</option>
                                                        <option value ="second">second</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                 <label class="form-label"><strong>Course Description*</strong>
                                                </label>   
                                                    <div class="controls">
                                                        <textarea rows="5" name="description" class="form-control valid" placeholder="Write your comment... (minimum 3 words)" parsley-minwords="3" required></textarea>

                                                    </div>
                                                </div>


                                            <div class="form-group">
                                                <label class="form-label"><strong>LECTURER to handle course</strong></label> 
                                                <div class="controls">
                                                    
                                                    <select class="form-control" name="tutor_id">
                                                        
                                                    </select>
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