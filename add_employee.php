<?php
$Firstname = $_POST['firstname'];
$Lastname = $_POST['lastname'];
$Birthday = $_POST['password'];
$Email = $_POST['password'];

$con=mysqli_connect("localhost","root","","projecttest_db");

if (mysqli_connect_errno()) {
    //echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
    exit();
  }
  else {
     // echo "connect sussced";
     //ค้นหาข้อมูลใน DB ว่าตรงกันหรือไม่
      $sql = "INSERT INTO users (fullname,username,password) VALUE ('{$Firstname}','{$Lastname}','{$Birthday}','{$Email}')";
  if (mysqli_query($con, $sql)) {
        echo "<script> alert('สร้างผู้ใช้เรียบร้อย'); window.location.href = 'http://localhost/project/index.php' </script> ";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }
  }


?>