<?php
include 'connection.php';

$s_id=$_POST['s_id'];
$p_name=$_POST['p_name'];
$p_occupation=$_POST['p_occupation'];

$sql="INSERT INTO parents(s_id,p_name,p_occupation) VALUES('$s_id','$p_name','$p_occupation')";
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