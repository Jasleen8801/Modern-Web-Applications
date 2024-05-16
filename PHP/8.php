<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Insert multiple records in DB</title>
</head>
<body>
  <?php 
    $conn = mysqli_connect('localhost', 'root', '', 'UC632_db');
    if($conn){
      echo "Connected to the database<br>";
    } else {
      die("Connection failed<br>").mysqli_connect_error();
    }
    $sql = "INSERT INTO employee (eid, ename) VALUES
    (1, 'John'),
    (2, 'Doe'),
    (3, 'Jane')";
    if(mysqli_query($conn, $sql)){
      echo "Records inserted<br>";
    } else {
      echo "Failed to insert records<br>";
    }
    mysqli_close($conn);
  ?>
</body>
</html>