<?php include('includes/header.php'); ?>
<?php include('includes/nav.php'); ?>

<?php
// include database connection file
require_once'functions.php';
// Object creation
$insertdata=new DB_con();
if(isset($_POST['insert']))
{
// Posted Values
$ename=$_POST['ename'];
$edate=$_POST['edate'];
$eplace=$_POST['eplace'];
$edesc=$_POST['edesc'];
//Function Calling

$sql=$insertdata->insert($ename,$edate,$eplace,$edesc);
}
?>
<?php include('includes/main_heading.php'); ?>

 <div class="card my-3 card-width" style="width: 40%; margin: 0 auto;">
        <div class="card-header">
            <div class="row">
                <div class="col-2 text-center pt-2">
                    <span><a href="index.php"><i class="fa fa-arrow-left anchor-icon"></i></a></span>
                </div>
                <div class="col-8 text-center">
                    <h2 style="font-family: Open Sans;">Event Insertion Form</h2>
                </div>
            </div>
        </div>
        <div class="card-body">
            <form name="insertrecord" method="post">
                <div class="row">
                    <div class="col-8 my-3" style="margin: 0 auto;">Event Name
                        <input type="text" name="ename" class="form-control" required>
                    </div>
                    <div class="col-8 my-3"  style="margin: 0 auto;">Event Date
                        <input type="date" name="edate" class="form-control" required>
                    </div>
                    <div class="col-8 my-3"  style="margin: 0 auto;">Event Venue
                        <input type="text" name="eplace" class="form-control" required>
                    </div>
                    <div class="col-8 my-3" style="margin: 0 auto;">Event Description
                        <textarea type="text" rows="5" name="edesc" class="form-control" required></textarea>
                    </div>
                    </div>
                    <div class="row" style="margin-top:1%">
                        <div class="col-md-12 text-center">
                            <button type="submit" name="insert" value="Submit" class="btn btn-outline-success">Submit</button>
                        </div>
                    </div>
               
            </form>
        </div>
    </div>


<?php include('includes/footer.php'); ?>