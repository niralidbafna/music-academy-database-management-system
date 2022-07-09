<?php
include 'connection.php';

$course_id=$_POST['course_id'];

$sql="DELETE FROM course WHERE course_id='$course_id'";
if(mysqli_query($conn,$sql)){
  echo "Success! Course Entry Removed! Return back to the previous page to insert more values or close this existing tab";
  ?>
  <script language="javascript">
      alert("Course Removed Successfully!");
  </script>
  <?php
}else{
  echo "Error: ".$sql."<br>".$conn->connect_error;
  ?>
  <script language="javascript">
      alert("Course Removal Failed!");
  </script>
  <?php
}
$conn->close();
?>