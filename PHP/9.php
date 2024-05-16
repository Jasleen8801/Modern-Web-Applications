<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Order data in Database</title>
</head>
<body>
  <?php 
    $conn = mysqli_connect("localhost", "root", "", "UC632_db");
    if($conn){
      echo "Conn to db<br>";
    } else {
      die("Conn failed<br>").mysqli_connect_error();
    }
    $sql = "SELECT * FROM employee ORDER BY ename";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0){
      while($row = mysqli_fetch_assoc($result)){
        echo "ID: ".$row['eid']." Name: ".$row['ename']."<br>";
      }
    } else {
      echo "No records found";
    }
    mysqli_close($conn);
  ?>
</body>
</html>