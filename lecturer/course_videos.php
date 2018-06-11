
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
                                                <!--<p>Details here.</p>-->


                                                <div class="row">
                                            <div class="col-md-12">
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <h3 class="panel-title"><strong>Enter New Videos</strong></h3>
                                                    </div>
                                                    <div class="panel-body">
                                                        <div class="row">
                                                            
                                                            <div class="col-md-3">
                                                                
                                                                <button class="btn btn-danger" data-toggle="modal" data-target="#modal-responsive">New Videos</button>
                                                            </div>


                                                        </div>

                                                        
                                        
                                    
                                    
                                                </div>

                                                     </div>

                                                    </div>
                                                </div>

                     <div class="modal fade" id="modal-responsive" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">× close</button>
                                    <h4 class="modal-title" id="myModalLabel"><strong>Enter Videos</strong></h4>
                                </div>
                                <div class="modal-body">
                                <form id="form1" method="post" class="form-horizontal" parsley-validate>
                                    <div class="row">
                                        <div class="col-md-6">

                                            <div class="form-group">
                                                <label for="field-1" class="control-label text-muted">Video Description*</label>
                                                <input type="text" name="video_text" class="form-control valid" placeholder="Enter title of video..." parsley-minwords="3" required>
                                            </div>
                                        </div>
                                        
                                    </div>
                                   <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                            <input type="hidden" name="course_id" value="">
                                                <label for="field-3" class="control-label text-muted">Video Link*</label>
                                                <input type="text" name="youtube_url" class="form-control valid" placeholder="Enter a video url... (minimum 3 words)" parsley-minwords="3" required>
                                            </div>
                                        </div>
                                    </div>
                                              
                                    
                                    
                                        <div class="modal-footer text-center">
                                            <button class="btn btn-primary m-b-10" onclick="javascript:$('#form1').parsley('validate');">Submit</button>
                                            <button type="reset" class="btn btn-default m-b-10">Clear</button>

                                    
                                </div>
                                      
                                    </div>
                                    </form>
                                    
                                </div>
                                
                            </div>
                        </div>
                    </div>



                     <table class="table table-striped">
                                                        <thead>
                                                          <tr>
                                                            <th>#</th>
                                                            <th style="width: 35%">VIDEO DESCRIPTION</th>
                                                            <th style="width: 50%">VIDEO URL</th> 
                                                            
                                                            <th>ACTIONS</th> 
                                                          </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php  $cnt = 1;
                                                                    foreach($recorded_videos as $recorded_video){ ?>
                                                                <tr>
                                                                    <td><?php echo $cnt++;?></td>

                                                                     <td>
                                                                        <?php echo $recorded_video['video_text'];?> <br />
                                                                        </td> 

                                                                    <td><?php echo $recorded_video['youtube_url'];?></td>  

                                                                    

                                                                    <td><a href='' style="color: blue;" >delete</a></td>
                                                                </tr>  
                                                            <?php } ?>

                                                        </tbody>
                                                </table>
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