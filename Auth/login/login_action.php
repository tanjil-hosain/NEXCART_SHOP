<?php
include('../../config/config.php');

if(isset($_POST['login'])){
    $userInput = $_POST['email_name'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email = '$userInput' OR user_name = '$userInput' LIMIT 1";

    $result = mysqli_query($db, $sql);

    if(mysqli_num_rows($result)>0){
         $user = mysqli_fetch_assoc($result);

         if(password_verify($password, $user['password'])){
            if($user['status'] == 1){
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['user_name'] = $user['user_name'];
                $_SESSION['role_id'] = $user['role_id'];

                if($user['role_id']== ROLE_SUPER_ADMIN){
                    header("location: admin/dashboard.php");
                } else {
                    header("location: index.php");
                }
                exit();
            }else{
                echo "<script> alert('Pending Account! Admin Approveal Needed.'); window.location='login.php'; </script>";
            }
         } else{
            echo "<script> alert('Your Password is Incorrect'); window.location='login.php';</script>";
         }
    } else{
        echo "<script> alert('Don't match email or user name'); window.location = 'login.php'; </script>";
    }


}
?>