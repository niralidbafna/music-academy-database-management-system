<?php
include 'connection.php';

$s_id=$_POST['s_id'];
$s_name=$_POST['s_name'];
$room_id=$_POST['room_id'];
$s_phno=$_POST['s_phno'];
$s_dob=$_POST['s_dob'];
$s_email=$_POST['s_email'];
$s_address=$_POST['s_address'];
$s_gender=$_POST['s_gender'];

$sql="INSERT INTO student (s_id,s_name,room_id,s_phno,s_dob,s_email,s_address,s_gender) VALUES('$s_id','$s_name','$room_id','$s_phno','$s_dob','$s_email','$s_address','$s_gender')";
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