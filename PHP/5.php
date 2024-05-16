<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Insert into table</title>
</head>
<body>
  <?php
    $conn = mysqli_connect("localhost", "root", "", "UC632_db");
    if($conn){
      echo "Conn to db<br>";
    } else {
      die("Conn failed").mysqli_connect_error();
    }
    $sql = "INSERT INTO employee(eid,ename) VALUES (1,'Dhruv')";
    if(mysqli_query($conn, $sql)){
      echo "New Rec added";
    } else {
      echo "Failed to add";
    }
    mysqli_close($conn);
  ?>
</body>
</html>