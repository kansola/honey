
<?php include('layout-header.php'); ?> 

<div class="parallax overflow-hidden page-section bg-cyan-300">
    <div class="container parallax-layer" data-opacity="true">
        <div class="media media-grid v-middle">
            <div class="media-left">
                <span class="icon-block half bg-cyan-500 text-white"><i class="fa fa-file-text-o"></i></span>
            </div>
            <div class="media-body">
                <h3 class="text-display-2 text-white margin-none">Announcements</h3> 
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="page-section">

        <div class="row">
            <div class="col-md-8 col-lg-9">
                
               
                    <div class="media media-grid media-paper-shadow margin-top-none s-container">
                        <div class="media-left">
                            <div class="icon-block half img-circle bg-grey-300">
                                <i class="fa fa-file-text text-white"></i>
                            </div>
                        </div>
                        <div class="media-body">
                            <div class="panel panel-default paper-shadow" data-z="0.5">
                                <div class="panel-body">
                                    
                                    <h4 class="text-title media-heading">
                                        <a href="#" class="link-text-color"></a>
                                    </h4>
                                    <p class="text-light text-caption">
                                        posted for
                                        
                                        <a href="<?php echo $link; ?>"></a> &nbsp;
                                        | <i class="fa fa-clock-o fa-fw"></i> 
                                    </p>
                                    <p class="text-light"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                
                  

            </div>
            <!--<div class="col-md-4 col-lg-3">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="form-group form-control-material">
                            <input id="forumSearch" type="text" class="form-control" placeholder="Type to search"/>
                            <label for="forumSearch">Search ...</label>
                        </div>
                        <a href="#" class="btn btn-inverse paper-shadow relative" data-z="0.5" data-hover-z="1">Search</a>
                    </div>
                </div>
 
            </div>-->
        </div>

    </div>
</div>

<?php include('layout-footer.php'); ?>