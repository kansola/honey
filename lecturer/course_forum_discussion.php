
<?php include('layout-header.php');?>
        <!-- BEGIN MAIN CONTENT -->
        <div id="main-content">
            <div class="row">
                 <div class="col-lg-12"> 
                    
                    <div class="panel panel-default">
                        <div class="panel-body" >
                            <h1></h1>

                            <hr>
                            <p><i class="fa fa-calendar"></i> Posted on </p>
                            <hr>
                             
                            
                            <hr>

                            
                                
                            <!-- the comment box -->
                            <div class="well">
                                <h4>Leave a Comment:</h4>
                                <form role="form" method="post">
                                    <div class="form-group">
                                        <textarea name="contribution" class="form-control summenote" rows="3"></textarea>
                                    </div>
                                    <input type="hidden" name="user_id" value="">
                                    <input type="hidden" name="forum_id" value="">
                                    <button type="submit" class="btn btn-danger">Submit</button>
                                </form>
                            </div>
                            <hr>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- END MAIN CONTENT -->
    
<?php include('layout-footer.php');?>