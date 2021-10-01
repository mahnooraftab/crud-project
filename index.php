<?php include('includes/header.php'); ?>
<?php include('includes/nav.php'); ?>
<?php
// include function file
require_once'functions.php';

//Deletion
if(isset($_GET['del']))
    {
// Geeting deletion row id
$id=$_GET['del'];
$deletedata=new DB_con();
$sql=$deletedata->delete($id);
if($sql)
{
// Message for successfull insertion

echo "<script>window.location.href='index.php'</script>";
echo "<script>alert('Record deleted successfully');</script>";
}
    }
?>
<?php include('includes/main_heading.php'); ?>


<div class="row my-5">
    <div class="col-12 text-center">
         <a class="text-anchor btn btn-outline-success"
                href="insert.php">Add New Event</a>
    </div>
</div>

<div class="container">
<div class="row d-flex justify-content-center">
    <div class="col-12 col-md-8 table-responsive">
        <table class="table text-center table-hover table-bordered table-striped">
            <thead>
                <th>#</th>
                <th>Name</th>
                <th>Date</th>
                <th>Venue</th>
                <th>Description</th>
                <th>Read</th>
                <th>Edit</th>
                <th>Delete</th>
            </thead>
            <tbody>
                <?php
 $fetchdata=new DB_con();
  $sql=$fetchdata->fetchdata();
  $cnt=1;
  while($row=mysqli_fetch_array($sql))
  {
  ?>
                <tr>
                    <td><?php echo htmlentities($cnt);?></td>
                    <td><?php echo htmlentities($row['event_name']);?></td>
                    <td><?php echo htmlentities($row['event_date']);?></td>
                    <td><?php echo htmlentities($row['event_venue']);?></td>
                    <td><?php echo htmlentities($row['event_desc']);?></td>
                    <td><a  data-id="<?php echo $row['id']; ?>" href=""  class="read"><i class="fa fa-eye"></i></a></td>
                    
                    <td><a href="update.php?id=<?php echo htmlentities($row['id']);?>"><i class="fa fa-edit"></i></a></td>
                    <td><a onClick="return confirm('Do you really want to delete');" href="index.php?del=<?php echo htmlentities($row['id']);?>"><i
                                    class="fa fa-trash"></i></a></td>
                </tr>
                <?php
// for serial number increment
$cnt++;
} ?>
            </tbody>
        </table>
    </div>
</div>
</div>


<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog mt-5">
    <div class="modal-content mt-5">
      <div class="modal-header">
        <h5 class="modal-title text-center" id="exampleModalLabel">Details</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="container">
          
          <p><span class="text-success">Name: </span><span class="event_name"></span></p>
          <p><span class="text-success">Date: </span><span class="event_date"></span></p>
          <p><span class="text-success">Place: </span><span class="event_place"></span></p>
          <p><span class="text-success">Desc: </span><span class="event_desc"></span></p>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary float-right" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>



<?php include('includes/footer.php'); ?>
