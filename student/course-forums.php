
<?php include('layout-header.php'); ?> 

<div class="parallax bg-white page-section" style="padding: 20px 0;">
    <div class="container parallax-layer" data-opacity="true">
        <div class="media v-middle">
            <div class="media-body">
                <h1 class="text-display-2 margin-none"></h1> 
            </div>
            <!--<div class="media-right">
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

                        <div class="container">
                            <div class="page-section">

                                <div class="row">
                                    <div class="col-md-8 col-lg-9">
                                        
                                        <div class="page-section padding-top-none">
                                            <div class="media v-middle">
                                                <div class="media-body">
                                                    <h1 class="text-display-1 margin-none">Questions & Answers</h1>
                                                    <p class="text-subhead text-light">You may ask any question relating to </p>
                                                </div>
                                                <div class="media-right">
                                                    <p><button class="btn btn-info" data-toggle="modal" data-target="#modal-responsive"><i class="fa fa-plus"></i> Ask Question</button></p>
                                                    <div class="modal fade" id="modal-responsive" aria-hidden="true">
                                                            <div class="modal-dialog modal-lg">
                                                                <div class="modal-content">

                                                                    <div class="modal-header">
                                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">× close</button>
                                                                        <h4 class="modal-title" id="myModalLabel"><strong>Ask Your question</strong></h4>
                                                                    </div>

                                                                    <div class="modal-body">
                                                                        
                                                                        <form method="post" class="form-horizontal">
                                                                            <label>Question</label>
                                                                            <input type="text" name="question" class="form-control" required>
                                                                            
                                                                            <input type="hidden" name="course_id" value="">
                                                                            <input type="hidden" name="user_id" value="">
                                                                            
                                                                            <label>DETAILS</label> 
                                                                            <textarea name="detail" class="summernote"></textarea>

                                                                            <input type="submit"  class=" btn btn-primary">
                                                                        </form>
                                                                        
                                                                    </div>
                                                                    
                                                                </div>
                                                            </div>
                                                    </div>
                                                  </div>
                                            </div>
                                        </div>

                                       
                                            <div class="panel panel-default paper-shadow" data-z="0.5">
                                                <ul class="list-group">

                                                    <li class="list-group-item media v-middle">
                                                        <div class="media-left">
                                                            <div class="icon-block half img-circle bg-grey-300">
                                                                <i class="fa fa-file-text text-white"></i>
                                                            </div>
                                                        </div>
                                                        <div class="media-body">
                                                            <h4 class="text-subhead margin-none">
                                                                <a href="course-forum-thread.php?forum_id=" class="link-text-color"></a>
                                                            </h4>
                                                            <div class="text-light text-caption">
                                                                asked by
                                                                <a href="#"> </a> &nbsp;
                                                                | <i class="fa fa-clock-o fa-fw"></i>
                                                            </div>
                                                        </div>
                                                        <div class="media-right">
                                                            <a href="course-forum-thread.php?forum_id= class="btn btn-white text-light"><i class="fa fa-comments fa-fw"></i></a>
                                                        </div>

                                                        <p></p>
                                                    </li>
                                                </ul>
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