
<?php include('layout-header.php');?>
        <!-- BEGIN MAIN CONTENT -->
        <div id="main-content">
            <div class="row">
                 <div class="col-lg-12">
                   
                    
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">
                                    <div class="col-md-12">    
                                       
                                        <div id="myTabContent" class="tab-content">
                                             
                                            <div class="tab-pane fade in active">
                                                 
                                                <p><button class="btn btn-danger" data-toggle="modal" data-target="#modal-responsive"><i class="fa fa-plus"></i> add material</button></p>
                                                    
                                                
                                            </div>

                                            <div class="modal fade" id="modal-responsive" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content">

                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">× close</button>
                                                                <h4 class="modal-title" id="myModalLabel"><strong>Ask Your question</strong></h4>
                                                            </div>

                                                            <div class="modal-body">
                                                                
                                                                <form method="post" class="form-horizontal" enctype="multipart/form-data"> 

                                                                    <label>Upload File</label>
                                                                    <input type="file" name="resource_file" class="form-control" required>
                                                                    
                                                                    <input type="hidden" name="course_id" value="">
                                                                    <!-- <input type="hidden" name="user_id" value="<?php echo $_SESSION['lecturer_id'];?>"> -->
                                                                    
                                                                    <label>DETAILS</label> 
                                                                    <textarea name="text" class="form-control valid" parsley-minwords="3" required></textarea>

                                                                    <div class="modal-footer text-center">
                                                                            <button class="btn btn-primary m-b-10" onclick="javascript:$('#form1').parsley('validate');">Submit</button>
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
        <!-- END MAIN CONTENT -->
    
<?php include('layout-footer.php');?>