<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>NIVAAN'S MUSIC ACADEMY</title>
  <link rel="icon" href="images/logo-circle.png" type="image/x-icon">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <section class="nav-bar">
    <div class="title-logo">
      <img src="images/logo-circle.png" alt="">
      <h1>NIVAAN'S MUSIC ACADEMY</h1>
    </div>
    <div class="topnav">      
      <a class="active" href="admin.html">Admin</a>
      <a href="index.html#contact">Contact</a>
      <a href="index.html#course">Courses</a>
      <a href="index.html#about">About</a>
      <a href="index.html">Home</a>
    </div>
  </section>
    <h2 class="viewh2">STUDENTS</h2>
    <table class="view">
      <tr>
        <th>STUDENT ID</th>
        <th>STUDENT NAME</th>
        <th>ROOM ID</th>
        <th>PHONE NUMBER</th>
        <th>DATE OF BIRTH</th>
        <th>EMAIL ID</th>
        <TH>ADDRESS</TH>
        <TH>GENDER</TH>
      </tr>

      <?php
      include 'connection.php';

      $sql = "SELECT s_id,s_name,room_id,s_phno,s_dob,s_email,s_address,s_gender FROM student";
      $result = $conn->query($sql);

      if ($result !== false && $result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
          ?>
            <tr>
              <td><?php echo $row['s_id']; ?></td>
              <td><?php echo $row['s_name']; ?></td>
              <td><?php echo $row['room_id']; ?></td>
              <td><?php echo $row['s_phno']; ?></td>
              <td><?php echo $row['s_dob']; ?></td>
              <td><?php echo $row['s_email']; ?></td>
              <td><?php echo $row['s_address']; ?></td>
              <td><?php echo $row['s_gender']; ?></td>
            </tr>	
            <?php
        }
        ?>
      </table>
      <?php
      } 
    $conn->close();
    ?>
</body>
</html>
