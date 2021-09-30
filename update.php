<?php include('includes/header.php'); ?>
<?php include('includes/nav.php'); ?>

<?php
// include function file
include_once("functions.php");
//Object
$updatedata=new DB_con();
if(isset($_POST['update']))
{
// Get the id
$id=intval($_GET['id']);
// Posted Values
$ename=$_POST['ename'];
$edate=$_POST['edate'];
$eplace=$_POST['eplace'];
$edesc=$_POST['edesc'];
//Function Calling
$sql=$updatedata->update($ename,$edate,$eplace,$edesc,$id);
// Mesage after updation
echo "<script>alert('Record Updated successfully');</script>";
// Code for redirection
echo "<script>window.location.href='index.php'</script>";
}
?>

<?php include('includes/main_heading.php'); ?>


<?php
// Get the id
$id=intval($_GET['id']);
$onerecord=new DB_con();
$sql=$onerecord->fetchonerecord($id);
$cnt=1;
while($row=mysqli_fetch_array($sql))
  {
  ?>
<div class="card my-3" style="width: 40%; margin: 0 auto;">
<div class="card-header">
            <div class="row">
                <div class="col-2 text-center pt-2">
                    <span><a href="index.php"><i class="fa fa-arrow-left anchor-icon"></i></a></span>
                </div>
                <div class="col-8 text-center">
                    <h2 style="font-family: Open Sans;">Event Updation Form</h2>
                </div>
            </div>
        </div>
    <div class="card-body">
        <form name="insertrecord" method="post">
            <div class="row">
                <div class="col-8 my-3" style="margin: 0 auto;">Event Name
                    <input type="text" name="ename" value="<?php echo htmlentities($row['event_name']);?>"
                        class="form-control" required>
                </div>
                <div class="col-8 my-3" style="margin: 0 auto;">Event Date
                    <input type="date" name="edate" value="<?php echo htmlentities($row['event_date']);?>"
                        class="form-control" required>
                </div>
                <div class="col-8 my-3" style="margin: 0 auto;">Event Venue
                    <input type="text" name="eplace" value="<?php echo htmlentities($row['event_venue']);?>"
                        class="form-control" required>
                </div>
                <div class="col-8 my-3" style="margin: 0 auto;">Event Description
                    <input type="text" name="edesc" value="<?php echo htmlentities($row['event_desc']);?>"
                        class="form-control" required>
                </div>
            </div>
            <div class="row mb-2" style="margin-top:1%">
                <div class="col-md-12 text-center">
                    <button type="submit" name="update" value="Update" class="btn btn-outline-success">Update</button>
                </div>
            </div>

        </form>
    </div>
</div>






<!-- <form name="insertrecord" method="post">
            <div class="row">
                <div class="col-md-4"><b>First Name</b>
                    <input type="text" name="ename" value="<?php echo htmlentities($row['event_name']);?>"
                        class="form-control" required>
                </div>
                <div class="col-md-4"><b>Last Name</b>
                    <input type="text" name="edate" value="<?php echo htmlentities($row['event_date']);?>"
                        class="form-control" required>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4"><b>Email id</b>
                    <input type="text" name="eplace" value="<?php echo htmlentities($row['event_venue']);?>"
                        class="form-control" required>
                </div>
                <div class="col-md-4"><b>edesc</b>
                    <input type="text" name="edesc" value="<?php echo htmlentities($row['event_desc']);?>"
                        class="form-control" maxlength="10" required>
                </div>
            </div>
            <?php } ?>
            <div class="row" style="margin-top:1%">
                <div class="col-md-8">
                    <input type="submit" name="update" value="Update">
                </div>
            </div>
        </form> -->


</div>
</div>

</body>
</htm