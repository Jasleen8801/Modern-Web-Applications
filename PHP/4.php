<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Reading data from table</title>
</head>
<body>
  <?php 
    $conn = mysqli_connect("localhost", "root", "", "UC632_db");
    if($conn){
      echo "Conn to DB<br>";
    } else {
      die("conn failed").mysqli_connect_error();
    }
    $sql = "SELECT eid, ename FROM employee";
    $result = mysqli_query($conn, $sql);
    $num_rows = mysqli_num_rows($result);
    echo "Total number of rows in employee table are $num_rows<br>";
    if($num_rows > 0){
      while($row = mysqli_fetch_array($result)){
        echo $row['eid'] . " " . $row['ename'];
        echo "<br>";
      }
    } else {
      echo "No rows";
    }
    mysqli_close($conn);
  ?>
</body>
</html>