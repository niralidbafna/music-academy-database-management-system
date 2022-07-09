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
    <h2 class="viewh2">COURSES</h2>
    <table class="view">
      <tr>
        <th>COURSE ID</th>
        <th>COURSE NAME</th>
        <th>COURSE DURATION</th>
        <th>COURSE FEES</th>
        <TH>TEACHER ID</TH>
      </tr>

      <?php
      include 'connection.php';

      $sql = "SELECT course_id,course_name,course_duration,course_fees,t_id FROM course";
      $result = $conn->query($sql);

      if ($result !== false && $result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
          ?>
            <tr>
              <td><?php echo $row['course_id']; ?></td>
              <td><?php echo $row['course_name']; ?></td>
              <td><?php echo $row['course_duration']; ?></td>
              <td><?php echo $row['course_fees']; ?></td>
              <td><?php echo $row['t_id']; ?></td>
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
