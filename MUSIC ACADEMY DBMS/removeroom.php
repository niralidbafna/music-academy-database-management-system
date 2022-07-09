<?php
include 'connection.php';

$r_id=$_POST['r_id'];

$sql="DELETE FROM room WHERE r_id='$r_id'";
if(mysqli_query($conn,$sql)){
  echo "Success! Room Entry Removed! Return back to the previous page to insert more values or close this existing tab";
  ?>
  <script language="javascript">
      alert("Room Removed Successfully!");
  </script>
  <?php
}else{
  echo "Error: ".$sql."<br>".$conn->connect_error;
  ?>
  <script language="javascript">
      alert("Room Removal Failed!");
  </script>
  <?php
}
$conn->close();
?>