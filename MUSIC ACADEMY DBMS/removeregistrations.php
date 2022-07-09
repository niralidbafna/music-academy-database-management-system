<?php
include 'connection.php';

$reg_id=$_POST['reg_id'];

$sql="DELETE FROM registrations WHERE reg_id='$reg_id'";
if(mysqli_query($conn,$sql)){
  echo "Success! Registration Entry Removed! Return back to the previous page to insert more values or close this existing tab";
  ?>
  <script language="javascript">
      alert("Registration Removed Successfully!");
  </script>
  <?php
}else{
  echo "Error: ".$sql."<br>".$conn->connect_error;
  ?>
  <script language="javascript">
      alert("Registration Removal Failed!");
  </script>
  <?php
}
$conn->close();
?>