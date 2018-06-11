
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
                                                
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="panel panel-default">
                                                            <div class="panel-heading">
                                                                <h3 class="panel-title"><strong>Create Quiz</strong></h3>  
                                                            </div>
                                                                <div class="panel-body">
                                                                    <div class="row">
                                                            
                                                                        <div class="col-md-3">
                                                                
                                                                            <button class="btn btn-danger" data-toggle="modal" data-target="#modal-responsive">create quiz</button>
                                                                        </div>

                                                            


                                                                     </div>

                                                        
                                        
                                    
                                    
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
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">× close     </button>
                                    <h4 class="modal-title" id="myModalLabel"><strong>Create Quiz</strong></h4>
                                </div>
                                <div class="modal-body">
                                <form id="form1" method="post" class="form-horizontal" parsley-validate>
                                    
                                            <div class="form-group">
                                                <label for="field-1" class="control-label text-muted">Title*</label>
                                                <input type="text" width="20" name="title" class="form-control valid" placeholder="week 1 test..." required>
                                            </div>

                                            <div class="form-group">
                                                <label for="field-1" class="control-label text-muted">Instructions*</label>
                                                <input type="text" width="20" name="instructions" class="form-control valid" placeholder="answer all..." required>
                                            </div>
                                        
                                        

                                            <div class="form-group">
                                                <label for="field-1" class="control-label text-muted">No of Questions*</label>
                                                <input type="text" width="20" name="no_of_questions" class="form-control valid" placeholder="5" required>
                                            </div>

                                            <div class="form-group">
                                                <label for="field-1" class="control-label text-muted">Pass score*</label>
                                                <input type="text" width="20" name="pass_mark" class="form-control valid" placeholder="5" required>
                                            </div>
                                        
                                        
                                        
                                    
                                  
                                        
                                            <div class="form-group">
                                            <input type="hidden" name="courseid" value="">
                                                <label for="field-1" class="control-label text-muted">Test duration in minutes*</label>
                                                <input width ="20" type="text" name="test_duration_mins" class="form-control valid" placeholder="60"  required>
                                            </div>
                                        
                                    
                                            <div class="form-group">
                                                <!-- date picker selector -->
                                                <label class="text-muted">Set deadline*: </label>
                                                <br>
                                                <input type="date" id="datetimepicker" data-inline="true" class="form-control" style="width: auto;" placeholder="Click to set date and time" name="deadline" required>
                                            </div>            
                                    
                                    
                                            <div class="modal-footer text-center">
                                                <button  class="btn btn-primary m-b-10" onclick="javascript:$('#form1').parsley('validate');">Submit</button>
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
                                                            <th style="width: 35%">Title</th>
                                                            <th style="width: 10%">Num of Questions</th>
                                                            <th style="width: 10%">Test Duration (Mins)</th> 
                                                            <th style="width: 35%">Deadline</th>
                                                            <th>ACTIONS</th>
                                                          </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php  $cnt = 1;
                                                                    foreach($tests as $test){ ?>
                                                                <tr>
                                                                    <td><?php echo $cnt++;?></td>

                                                                    <td><?php echo $test['title'];?></td>

                                                                     <td>
                                                                        <?php echo $test['no_of_questions'];?>  
                                                                        </td> 

                                                                    <td><?php echo $test['test_duration_mins'];?></td>  

                                                                    <td><?php echo $test['deadline'];?></td>
 
                                                                   <td>
                                                                        <a href='quiz_submission.php?test_id=<?php echo $test['id'];?>' class="btn btn-primary btn-sm" >view quiz submitted</a>
                                                                       
                                                                    </td>
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
        <!-- END MAIN CONTENT -->
    
<?php include('layout-footer.php');?>
<script>
    function hide(arg) {
        $(arg).parent().closest('tr').hide();
    }
</script>