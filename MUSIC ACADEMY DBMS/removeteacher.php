<?php
include 'connection.php';

$t_id=$_POST['t_id'];

$sql="DELETE FROM teacher WHERE t_id='$t_id'";
if(mysqli_query($conn,$sql)){
  echo "Success! Teacher Entry Removed! Return back to the previous page to insert more values or close this existing tab";
  ?>
  <script language="javascript">
      alert("Teacher Removed Successfully!");
  </script>
  <?php
}else{
  echo "Error: ".$sql."<br>".$conn->connect_error;
  ?>
  <script language="javascript">
      alert("Teacher Removal Failed!");
  </script>
  <?php
}
$conn->close();
?>