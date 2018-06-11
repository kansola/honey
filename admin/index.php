
<?php include('layout-header.php');?>
        <!-- BEGIN MAIN CONTENT -->
        <div id="main-content">
            <div class="row">
                <div class="col-lg-7">
                    <h1>Settings</h1>
                   
                    <h3>Current Semester: </h3>


                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    Change Settings

                                    

                                    <form method="POST"> 
                                        <div class="form-group">
                                            <label class="form-label"><strong>Current Semester</strong>
                                            </label> 
                                            <div class="controls">
                                                <select class="form-control" name="current_semester">
                                                    <option value ="first">First Semester</option>
                                                    <option value ="second">Second Semester</option>
                                                </select>
                                            </div>
                                         </div>
   
                                        <div class="form-group text-center">
                                            <button type="submit" name="submit" class="btn btn-info">save changes</button> 
                                        </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                     
                </div>

                <div class="col-lg-5">
                    <h1>Quick Links</h1>
                    <br /> 

                    <h4><a href="add_lecturer.php">Add new lecturer</a></h4>
                    <h4><a href="lecturers.php">All lecturers</a></h4>
                    <h4><a href="add_course.php">Add new course</a></h4>
                    <h4><a href="courses.php">All Courses</a></h4>
                </div>
            </div>
        </div>
        <!-- END MAIN CONTENT -->
    </div>
<?php include('layout-footer.php');?>