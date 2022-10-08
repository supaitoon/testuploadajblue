<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แสดง Blog</title>
</head>

<body>
    <?php
  include "navbar.php";
?>

    <div class="container-fluid">
        <h1>แสดงบล็อก</h1>
  <?php
      include "connect.php";
      $sql = "SELECT * FROM tbl_blogs";    //ดึงข้อมูลทั้งหมด tbl_blogs
      $result = mysqli_query( $conn, $sql);
      while($row = mysqli_fetch_assoc($result)){
        echo "$row[title] <br/>";               //แสดงผลค่า
        echo "$row[detail]";
        echo "<img src='$row[img]' />";
      }
  ?>

    </div>
</body>

</html>