<?php
include 'connection.php';

$course_id=$_POST['course_id'];
$course_name=$_POST['course_name'];
$course_duration=$_POST['course_duration'];
$course_fees=$_POST['course_fees'];
$t_id=$_POST['t_id'];

$sql="INSERT INTO course (course_id,course_name,course_duration,course_fees,t_id) VALUES('$course_id','$course_name','$course_duration','$course_fees','$t_id')";
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