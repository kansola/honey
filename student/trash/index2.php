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
            CONTENT HERE 
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