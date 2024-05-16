<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Updating the table</title>
</head>
<body>
  <?php 
    $conn = mysqli_connect("localhost", "root", "", "UC632_db");
    if($conn){
      echo "Conn to db<br>";
    } else {
      die("Conn failed<br>").mysqli_connect_error();
    }
    $sql = "UPDATE employee SET ename='Rohan' WHERE eid=1";
    if(mysqli_query($conn, $sql)){
      echo "Record updated";
    } else {
      echo "Failed to update";
    }
    mysqli_close($conn);
  ?>
</body>
</html>