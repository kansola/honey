
<?php include('layout-header.php'); ?> 

<div class="parallax bg-white page-section" style="padding: 20px 0;">
    <div class="container parallax-layer" data-opacity="true">
        <div class="media v-middle">
            <div class="media-body">
                <h1 class="text-display-2 margin-none"></h1> 
            </div>
           <!-- <div class="media-right">
                <div class="width-100 text-right">
                    <div class="btn-group">
                        <a  class="btn btn-white" href="website-directory-grid.html"><i class="fa fa-th"></i></a>
                        <a  class="btn btn-grey-900" href="website-directory-list.html"><i class="fa fa-list"></i></a>
                    </div>
                </div>
            </div>-->
        </div>
    </div>
</div>

<div class="container">

    <div class="page-section">
        <div class="row">
 
                <div class="tabbable tabs-blocks">

                <!-- Tabs -->
               
                <!-- // END Tabs -->

                <!-- Panes -->
                <div class="tab-content">  
                    <div id="blocks-settings-1" class="tab-pane active">
                            <div class="row">
                            <div class="col-md-8 col-lg-9">

                                

                                    <div class="media media-grid media-paper-shadow margin-top-none s-container">
                                        
                                        <div class="media-body">
                                            <div class="panel panel-default paper-shadow" data-z="0.5">
                                                <div class="panel-body">
                                                    
                                                    <h4 class="text-title media-heading">
                                                        <a href="#" class="link-text-color"></a>
                                                    </h4>
                                                    <p class="text-light text-caption">
                                                     <i class="fa fa-clock-o fa-fw"></i>Assignment deadline  
                                                    </p>
                                                    <p class="text-light"></p>

                                                        <br />
                                                        <h4>Submit Assignment</h4>
                                                   

                                                        <span class="label label-success">SUBMITTED ALREADY</span>  
                                                  
                                                        <form method="post" enctype="multipart/form-data">

                                                            <input type="file" name="file" class="col-md-4" required=""> 

                                                            <input type="submit" value="submit" name="submit" class="btn btn-primary ">

                                                            <input type="hidden" name="assignment_id" value="">

                                                            <input type="hidden" name="user_id" value="">
                                                        </form>
                                                   
                                                   
                                                        <span class="label label-danger">DEADLINE PASSED !</span> 
                                                   
                                              
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                              
                            </div>
                        </div>

                    </div>
                </div>
                <!-- // END Panes -->

            </div>

 

        </div>
    </div>

</div>

<?php include('layout-footer.php'); ?>