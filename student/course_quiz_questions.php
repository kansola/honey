
<?php include('layout-header.php'); ?> 

<div class="container">
    <div class="jumbotron text-center bg-transparent margin-none">
        <h1>Quiz questions</h1>
        <p></p>
        <p id="timer">Timer: </p>
    </div>
     
    <div class="row">
        <div class="col-md-12">

             
            <form method="POST">
                
                     
                    <div class="panel panel-default paper-shadow" data-z="0.5">
                        <div class="panel-body">
                            <h4>Question </h4>
                            
                <div class="panel panel-default paper-shadow" >
                    
                    <div class="panel-footer">
                        <div class="text-center">
                            <input type="hidden" name="test_id" value="">
                            <input type="submit" value="submit answers" class="btn btn-success" name="submit" id="submit-test">
                            <!-- <button class="btn btn-success"><i class="fa fa-save fa-fw"></i> Submit Answers</button> -->
                        </div>
                    </div>
                </div>

            </form>
        </div>
    </div>

</div> 



<?php include('layout-footer.php'); ?>