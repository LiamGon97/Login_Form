<?php
session_start();
include 'conn.php';

$username = $_POST['user_n'];
$password = $_POST['user_p'];


$result = mysqli_query($conn, "SELECT * FROM users WHERE user_n = '$username' ");

while ($row = mysqli_fetch_array($result)){
    if($row['user_p'] == $password && $row['usertype'] == 'admin'){
        $_SESSION['id'] = $row['login_id'];
        $_SESSION['username'] = $row['user_n'];
        header('location: admin.php');
    }
    elseif($row['user_p'] == $password && $row['usertype'] == 'Faculty'){
        $_SESSION['id'] = $row['login_id'];
        $_SESSION['username'] = $row['user_n'];
        header('location: faculty.php');
    }
    elseif($row['user_p'] == $password && $row['usertype'] == 'Student'){
        $_SESSION['id'] = $row['login_id'];
        $_SESSION['username'] = $row['user_n'];
        header('location: student.php');
    }else{
        echo "<script>alert('Cannot find the User');</script>";
    }
}

?>
