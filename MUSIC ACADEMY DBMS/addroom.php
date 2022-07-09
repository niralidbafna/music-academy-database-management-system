<?php
include 'connection.php';

$r_id=$_POST['r_id'];
$r_name=$_POST['r_name'];
$floor_no=$_POST['floor_no'];

$sql="INSERT INTO room(r_id,r_name,floor_no) VALUES('$r_id','$r_name','$floor_no')";
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