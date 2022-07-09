<?php
include 'connection.php';

$s_id=$_POST['s_id'];

$sql="DELETE FROM student WHERE s_id='$s_id'";
if(mysqli_query($conn,$sql)){
  echo "Success! Student Entry Removed! Return back to the previous page to insert more values or close this existing tab";
  ?>
  <script language="javascript">
      alert("Student Removed Successfully!");
  </script>
  <?php
}else{
  echo "Error: ".$sql."<br>".$conn->connect_error;
  ?>
  <script language="javascript">
      alert("Student Removal Failed!");
  </script>
  <?php
}
$conn->close();
?>