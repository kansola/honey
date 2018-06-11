<?php 
 include("../includes/layout/loginheader.php");

include("../core/init.php");
 ?>

<body data-page="blank_page">
    <!-- BEGIN TOP MENU -->
    <?php 
            include("../includes/layout/topMenu.php");

        ?>
    <!-- END TOP MENU -->
    <!-- BEGIN WRAPPER -->
    <div id="wrapper">
        <!-- BEGIN MAIN SIDEBAR -->
        <?php 
            include("../includes/layout/student_nav.php");

        ?>
        <!-- END MAIN SIDEBAR -->
        <!-- BEGIN MAIN CONTENT -->
        <div id="main-content">
            <div class="row">
                <div class="col-md-10">
                    <div class="panel panel-default"> 
                        <div class="panel-heading">
                            <h3 class="panel-title"><strong>All Courses</strong></h3>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                  <?php
                                        $session_user_id = $_SESSION['id'];;
                                        register_courses($session_user_id);

                                  ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MAIN CONTENT -->
    </div>
    <!-- END WRAPPER -->

    <!-- BEGIN CHAT MENU -->
    
    <!-- END CHAT MENU -->
    <!-- BEGIN MANDATORY SCRIPTS -->
    <?php 
        include("../core/mandatoryscripts.php");
    ?>
    <!-- END MANDATORY SCRIPTS -->
     
    <script src="../assets/js/application.js"></script>
</body>
</html>