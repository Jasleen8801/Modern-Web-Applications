<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Prepare Statement</title>
</head>
<body>
  <?php
    $conn = mysqli_connect("localhost", "root", "", "UC632_db");
    if($conn){
      echo "Connected to the database<br>";
    } else {
      die("Connection failed<br>").mysqli_connect_error();
    }
    $sql = "INSERT INTO employee (eid, ename) VALUES (?, ?)"; 
    // (? ?) are parameter markers used for variable binding
    $stmt = mysqli_stmt_init($conn);
    if(mysqli_stmt_prepare($stmt, $sql)){
      echo "Statement prepared<br>";
      mysqli_stmt_bind_param($stmt, "is", $eid, $ename);
      $eid = 4;
      $ename = "Rohan";
      mysqli_stmt_execute($stmt);
      $eid = 5;
      $ename = "Rohit";
      mysqli_stmt_execute($stmt);
      echo "Records inserted<br>";
    } else {
      echo "Failed to prepare statement<br>";
    }
  ?>
</body>
</html>