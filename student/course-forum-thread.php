
<?php include('layout-header.php'); ?> 

<div class="parallax overflow-hidden page-section bg-deep-purple-300">
    <div class="container parallax-layer" data-opacity="true">
        <div class="media media-grid v-middle">
            <div class="media-left">
                <span class="icon-block half bg-deep-purple-500 text-white"><i class="fa fa-life-bouy"></i></span>
            </div>
            <div class="media-body">
                <h3 class="text-display-2 text-white margin-none">Forum</h3>
                <p class="text-white text-subhead">Ask our awesome community</p>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="page-section">

        <div class="row">
            <div class="col-md-8 col-lg-9">
                
    <div class="page-section padding-top-none">
    <div class="media media-overflow-visible s-container">
        <div class="media-body">
            <h1 class="text-display-1 margin-top-none"></h1>
            <p></p>

            <p class="text-light text-caption">
                posted by
                <a href="#"><img src="images/people/50/woman-1.jpg" alt="person" class="img-circle width-20"/>  </a> &nbsp;
                | <i class="fa fa-clock-o fa-fw"></i> 
            </p>
        </div>
        <div class="media-right">
            <a href="#replys" class="btn btn-white paper-shadow relative" data-z="0.5" data-hover-z="1" data-animated><i class="fa fa-fw fa-reply"></i> Reply</a>
        </div>
    </div>
</div>

    <div class="media s-container">
        <!--<div class="media-left">
            <div class="width-70 text-center">
                <p><a href=""><img src="images/people/50/guy-2.jpg" alt="people"/></a></p>
                <p class="text-caption text-light">2310 posts</p>
                <span class="icon-block s25 img-circle bg-purple-300"><i class="fa fa-star text-white"></i></span>
                <span class="icon-block s25 img-circle bg-indigo-300"><i class="fa fa-trophy text-white"></i></span>
            </div>
        </div>-->
        <div class="media-body">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="text-subhead-2"> <span class="text-caption text-light"></span></div>
                    <p></p>
                </div>
            </div>
        </div>
    </div>

 
<!--<div class="media s-container">
    <div class="media-left">
        <div class="width-70 text-center">
            <a href=""><img src="images/people/50/guy-1.jpg" alt="people"/></a>
        </div>
    </div>
    <div class="media-body">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="text-subhead-2">Dave P. <span class="text-caption text-light">- 1 hour ago</span></div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, adipisci aperiam, cum deserunt, dicta dolorum ea harum libero modi nihil quisquam veritatis. Aliquid ea et ex minus obcaecati temporibus voluptates! Commodi deserunt dolorum eum excepturi exercitationem explicabo fugit impedit, incidunt, iusto modi molestias officia possimus praesentium veritatis, voluptatum? Dolor, repellat.</p>
            </div>
        </div>
    </div>
</div>-->

<!--<div class="text-right">
    <ul class="pagination margin-top-none">
    <li class="disabled"><a href="#">&laquo;</a></li>
    <li class="active"><a href="#">1</a></li>
    <li><a href="#">2</a></li>
    <li><a href="#">3</a></li>
    <li><a href="#">&raquo;</a></li>
</ul>
</div>-->

<div id = "replys" class="page-section padding-top-none">
    <div class="panel panel-default paper-shadow" data-z="0.5">
        <div class="panel-heading">
            <h4 class="text-headline">Post a reply</h4>
        </div>
        <div class="panel-body">
            <form role="form" method="post">
                <div class="form-group form-control-material">
                    <textarea id="reply" class="form-control" name = "contribution" placeholder="Your comment .."></textarea>
                    <label for="reply">Your comment</label>
                </div>
                <input type="hidden" name="user_id" value="">
                <input type="hidden" name="forum_id" value="">
                <div class="text-right">
                    <button class="btn btn-primary" type="submit">Post reply <i class="fa fa-plus"></i></button>
                </div>
            </form>
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
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">Categories</h4>
        </div>
        <ul class="list-group list-group-menu">
            <li class="list-group-item">
            <a href="website-forum.html"><i class="fa fa-chevron-right fa-fw"></i> All</a>
            </li>
            <li class="list-group-item">
            <a href="website-forum-category.html"><i class="fa fa-chevron-right fa-fw"></i> General</a>
            </li>
            <li class="list-group-item">
            <a href="website-forum-category.html"><i class="fa fa-chevron-right fa-fw"></i> Lessons</a>
            </li>
            <li class="list-group-item">
            <a href="website-forum-category.html"><i class="fa fa-chevron-right fa-fw"></i> Support</a>
            </li>
        </ul>
    </div>
</div>-->
        </div>

    </div>
</div>

<?php include('layout-footer.php'); ?>