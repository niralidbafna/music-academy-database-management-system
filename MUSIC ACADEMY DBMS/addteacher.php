<?php
include 'connection.php';

$t_id=$_POST['t_id'];
$t_name=$_POST['t_name'];
$t_phno=$_POST['t_phno'];
$t_email=$_POST['t_email'];
$t_address=$_POST['t_address'];
$t_salary=$_POST['t_salary'];

$sql="INSERT INTO teacher (t_id,t_name,t_phno,t_email,t_address,t_salary) VALUES('$t_id','$t_name','$t_phno','$t_email','$t_address','$t_salary')";
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