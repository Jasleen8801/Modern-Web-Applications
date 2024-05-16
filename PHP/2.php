<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Creating a Database</title>
</head>
<body>
  <?php 
    $conn = mysqli_connect("localhost", "root", "");
    if($conn){
      echo "Connected to the server<br>";
    } else {
      echo "Failed to connect to the server";
    }
    $sql = "CREATE DATABASE UC632_db";
    if(mysqli_query($conn, $sql)){
      echo "Database created successfully";
    } else {
      echo "Failed to create database";
    }
    mysqli_close($conn);
  ?>
</body>
</html>