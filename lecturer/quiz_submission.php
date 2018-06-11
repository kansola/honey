


<div id="main-content">
            <div class="row">
                <div class="col-lg-12">
                    <h1><?php echo $quiz['title'] ?></h1>
                    <h3>Maximum mark :</h3>
                    <h3>Pass Mark:</h3>  

 
                    <div class="panel panel-default">
                        <div class="panel-body">
                            

                            <table class="excel_export table table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th style="width: 35%">Student Name</th>
                                        <th style="width: 35%">Index No</th> 
                                        <th style="width: 50%">Quiz Score</th> 
                                        <!--<th style="width: 50%">DEADLINE</th> -->
                                        <!--<th>ACTIONS</th> -->
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                </tbody>
                            </table>


                         </div> 
                    </div>

                    <!--<div id="summary-modal" class="modal">
                        <div class="modal-content">
                            <h1>Count:</h1>
                            
                        </div>
                    </div>
                    <button data-toggle="modal" data-target="#summary-modal">Quiz Summary Report</button>
                    <a href='quiz_report.php?test_id class="btn btn-primary btn-sm" >Quiz Summary Report</a>-->
                         
                                        

                                    <div id="summary-modal"  class="modal" aria-hidden="true">
                        
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                        <h4 class="modal-title" id="myModalLabel"><strong>Quiz Report</strong></h4>
                                    </div>
                                     <div class="modal-body">
                                        


                                        <h3> No of Students that took the quiz:</h3>


                                        <h3> No of Students that passed:</h3>

                                        <h3> No of Students that failed:</h3>


                                        


                                    </div>
                                      
                                </div>
                                   
                                    
                            
                                
                        </div>





                                        <button data-toggle="modal" data-target="#summary-modal">Quiz Summary Report</button>



                                        <!--export-->

                                         <table class="table table-bordered table-responsive" id="billing_table" style="display:none">

                                            <thead>
                                    <tr>
                                        <th>#</th>
                                        <th style="width: 35%">Student Name</th>
                                        <th style="width: 35%">Index No</th> 
                                        <th style="width: 50%">Quiz Score</th> 
                                        <!--<th style="width: 50%">DEADLINE</th> -->
                                        <!--<th>ACTIONS</th> -->
                                    </tr>
                                </thead>
                                <tbody>
                                    

                                </tbody>
                                        </table> 
                                        





               <a href="#" id="test" class=" rgt btn btn-primary" onClick="javascript:fnExcelReport('billing_table');">Export Quiz Report</a>



                </div>


            </div>
                    

</div>
            

<?php include('layout-footer.php');?>