<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#sidebar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a id="menu-medium" class="sidebar-toggle tooltips">
                    <i class="fa fa-outdent"></i>
                </a>
                <a class="navbar-brand" href="/index">
                    <!-- <img src="assets/img/logo.png" alt="logo" width="" height=""> -->
                </a>
            </div>
            <div class="navbar-center"> 
                Welcome, <?php echo $user_data['title'].' '.$user_data['firstname'].' '.$user_data['lastname'] ;?>!!!
            </div>
            <div class="navbar-collapse collapse">
                <!-- BEGIN TOP NAVIGATION MENU -->
                <ul class="nav navbar-nav pull-right header-menu"> 
                    <!-- BEGIN USER DROPDOWN -->
                    <li class="dropdown" id="user-header">
                        <a href="#" class="dropdown-toggle c-white" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                            <!-- <img src="assets/img/avatars/avatar2.png" alt="user avatar" width="30" class="p-r-5"> -->
                            <span class="username"> <?php echo $user_data['firstname'];?></span>
                            <i class="fa fa-angle-down p-r-10"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="/profile">
                                    <i class="glyph-icon flaticon-account"></i> My Profile
                                </a>
                            </li> 
                            <li>
                                <a href="../logout.php">
                                    <i class="glyph-icon flaticon-padlock23"></i> Logout
                                </a>
                            </li>
                            <li class="dropdown-footer clearfix">
                              <a href="javascript:;" class="toggle_fullscreen" title="Fullscreen">
                                <i class="glyph-icon flaticon-fullscreen3"></i>
                              </a>
                              <a href="#" title="Lock Screen">
                                <i class="glyph-icon flaticon-padlock23"></i>
                              </a>
                              <a href="../logout.php" title="Logout">
                                <i class="fa fa-power-off"></i>
                              </a>
                            </li>
                        </ul>
                    </li>
                    <!-- END USER DROPDOWN -->

                    <!-- BEGIN CHAT HEADER -->
                    <li id="chat-header">
                        <a href="#" class="c-white" id="chat-toggle">
                            <i class="glyph-icon flaticon-speech76 f-24"></i>
                            <span id="chat-notification" class="notification notification-danger hide" data-delay="2000"></span>
                        </a>
                        <div id="chat-popup" class="chat-popup hide" data-delay="2000">
                            <div class="arrow-up"></div>
                            <div class="chat-popup-inner bg-blue">
                                <div>
                                    <div class="clearfix w-600">
                                        <img src="../assets/images/avatars/avatar3.png" alt="avatar 3" width="30" class="pull-left img-circle p-r-5">Alexa Johnson
                                    </div>
                                    <div class="message m-t-5">Hey you there?</div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- END CHAT HEADER -->
                </ul>
                <!-- END TOP NAVIGATION MENU -->
            </div>
        </div>
    </nav>