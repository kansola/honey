<nav id="sidebar">
            <div id="main-menu"> 
                <ul class="sidebar-nav">
                    <li>
                        <a href="index.html"><i class="fa fa-dashboard"></i>
                            <span class="sidebar-text">Dashboard</span></a>
                    </li> 
                    <li>
                        <a href="notifications.html">
                            <i class="fa fa-bullhorn"></i>
                            <span class="sidebar-text">Notifications</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="submenu collapse">
                            <li>
                                <a href="notification.html"><span class="sidebar-text">Send Notification</span></a>
                            </li>
                            <li>
                                <a href="notifications.html"><span class="sidebar-text">All Notifications</span></a>
                            </li>
                        </ul>
                    </li> 
                    <li>
                        <a href="/courses">
                            <i class="fa fa-book"></i>
                            <span class="sidebar-text">My Courses</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="submenu collapse">
                            <li>
                                <a href="register_courses.php"><span class="sidebar-text">View All Courses</span></a>
                            </li>

                            <?php
                                        $session_user_id = $_SESSION['id'];;
                                        output_courses_stu_nav($session_user_id);

                            ?>
                            
                        </ul>
                    </li> 
                    <li>
                        <a href="/courses">
                            <i class="fa fa-male"></i>
                            <span class="sidebar-text">Students</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="submenu collapse">
                            <li>
                                <a href="course-students.html"><span class="sidebar-text">All Students</span></a>
                            </li> 
                            
                        </ul>
                    </li> 
                    <li>
                        <a href="quizzes.html"> 
                            <i class="fa fa-edit"></i>
                            <span class="sidebar-text">Quizzes</span>
                        </a>
                        <ul class="submenu collapse">
                            
                            <li>
                                <a href="quizzes.html"><span class="sidebar-text">All Quizzes</span></a>
                            </li>
                        </ul>
                    </li>  
                    <li>
                        <a href="/profile">
                            <i class="glyph-icon flaticon-account"></i>
                            <span class="sidebar-text">Profile</span> 
                        </a>
                    </li>  
                </ul>
            </div>
             
        </nav>