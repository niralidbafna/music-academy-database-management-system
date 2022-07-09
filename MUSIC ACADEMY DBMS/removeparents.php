<?php
include 'connection.php';

$s_id=$_POST['s_id'];
$p_name=$_POST['p_name'];

$sql="DELETE FROM parents WHERE s_id='$s_id' AND p_name='$p_name'";
if(mysqli_query($conn,$sql)){
  echo "Success! Parent Entry Removed! Return back to the previous page to insert more values or close this existing tab";
  ?>
  <script language="javascript">
      alert("Parent Removed Successfully!");
  </script>
  <?php
}else{
  echo "Error: ".$sql."<br>".$conn->connect_error;
  ?>
  <script language="javascript">
      alert("Parent Removal Failed!");
  </script>
  <?php
}
$conn->close();
?>