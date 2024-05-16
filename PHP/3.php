<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Creating a table</title>
</head>
<body>
  <?php
    $conn = mysqli_connect("localhost", "root", "", "UC632_db");
    if($conn) {
      echo "Connected to db<br>";
    } else {
      die("Conn failed").mysqli_connect_error();
    }
    $sql = "CREATE TABLE employee(eid INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,ename VARCHAR(30) NOT NULL)";
    if(mysqli_query($conn, $sql)){
      echo "Table created";
    } else {
      echo "Failed to create table" . mysqli_connect_error();
    }
    mysqli_close($conn);
  ?>
</body>
</html>