<?php  
    require 'initialise.php';

?>
<?php include('layout-header.php'); ?> 

<div class="container">
    <div class="jumbotron text-center bg-transparent margin-none">
        <h1>Grid System</h1>
        <p>Bootstrap includes a responsive, mobile first fluid grid system that appropriately scales up to 12 columns as the device or viewport size increases. You can learn more about the grid system on the <a href="http://getbootstrap.com/css/#grid">official Bootstrap website</a>. Next, here are some basic grid layouts to get you familiar with building within the Bootstrap grid system.</p>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-body">
                    .col-md-4
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-body">
                    .col-md-4
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-body">
                    .col-md-4
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-body">
                    .col-md-6
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-body">
                    .col-md-6
                </div>
            </div>
        </div>
    </div>

    <!-- Stack the columns on mobile by making one full-width and the other half-width -->
    <div class="row">
        <div class="col-xs-12 col-md-8">
            <div class="panel panel-default">
                <div class="panel-body">
                    .col-xs-12 .col-md-8
                </div>
            </div>
        </div>
        <div class="col-xs-6 col-md-4">
            <div class="panel panel-default">
                <div class="panel-body">
                    .col-xs-6 .col-md-4
                </div>
            </div>
        </div>
    </div>

    <!-- Columns start at 50% wide on mobile and bump up to 33.3% wide on desktop -->
    <div class="row">
        <div class="col-xs-6 col-md-4">
            <div class="panel panel-default">
                <div class="panel-body">
                    .col-xs-6 .col-md-4
                </div>
            </div>
        </div>
        <div class="col-xs-6 col-md-4">
            <div class="panel panel-default">
                <div class="panel-body">
                    .col-xs-6 .col-md-4
                </div>
            </div>
        </div>
        <div class="col-xs-6 col-md-4">
            <div class="panel panel-default">
                <div class="panel-body">
                    .col-xs-6 .col-md-4
                </div>
            </div>
        </div>
    </div>

    <!-- Columns are always 50% wide, on mobile and desktop -->
    <div class="row">
        <div class="col-xs-6">
            <div class="panel panel-default">
                <div class="panel-body">
                    .col-xs-6
                </div>
            </div>
        </div>
        <div class="col-xs-6">
            <div class="panel panel-default">
                <div class="panel-body">
                    .col-xs-6
                </div>
            </div>
        </div>
    </div>
</div> 

<?php include('layout-footer.php'); ?>