
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
                                                <p><button class="btn btn-danger" data-toggle="modal" data-target="#modal-responsive">New Announcement</button></p>
                                                
                                                <div class="modal fade" id="modal-responsive" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content">

                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">× close</button>
                                                                <h4 class="modal-title" id="myModalLabel"><strong>Add New Announcement</strong></h4>
                                                            </div>

                                                            <div class="modal-body">
                                                                
                                                                <form method="post" class="form-horizontal">
                                                                    <label>TITLE</label>
                                                                    <input type="text" name="title" class="form-control" required>
                                                                    <input type="hidden" name="course_id" value="">
                                                                    <label>DETAILS</label> 
                                                                    <textarea name="message" class="form-control valid" parsley-minwords="3" required></textarea>

                                                                    <!--<input type="submit"  class=" btn btn-primary">-->

                                                                    <div class="modal-footer text-center">
                                                                            <button class="btn btn-primary m-b-10" onclick="javascript:$('#form1').parsley('validate');">Submit</button>
                                                                            <button type="reset" class="btn btn-default m-b-10">Clear</button>

                                    
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
                                                            <th style="width: 35%">TITLE</th>
                                                            <th style="width: 50%">MESSAGE</th>
                                                            <th> ACTIONS</th> 
                                                            <!--<th>ACTIONS</th>_--> 
                                                          </tr>
                                                        </thead>
                                                        <tbody>
                                                            
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
