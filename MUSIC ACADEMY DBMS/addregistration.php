<?php
include 'connection.php';

$reg_id=$_POST['reg_id'];
$student_id=$_POST['student_id'];
$course_id=$_POST['course_id'];
$reg_date=$_POST['reg_date'];

$sql="INSERT INTO registrations (reg_id,student_id,course_id, reg_date) VALUES('$reg_id','$student_id','$course_id','$reg_date')";
if(mysqli_query($conn,$sql)){
  echo "Success! Return back to the previous page to insert more values or close this existing tab";
  ?>
  <script language="javascript">
      alert("Record inserted successfully");
  </script>
  <?php
}else{
  echo "Error: ".$sql."<br>".$conn->connect_error." Make sure primary key values are unique";
  ?>
  <script language="javascript">
      alert("Record Insertion Failed!");
  </script>
  <?php
}
$conn->close();
?>