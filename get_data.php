<?php
require_once'functions.php';

   $id = $_GET['id'];

   $deletedata=new DB_con();
   $sql=$deletedata->findOne('events', $id);
   $data = mysqli_fetch_array($sql);
   echo json_encode($data);

?>