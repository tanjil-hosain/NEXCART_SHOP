<?php
include('../../config/config.php');

if(isset($_POST['register'])){
    $role_id = $_POST['role_id'];
    $name = $_POST['name'];
    $user_name = $_POST['u_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    $has_pass = password_hash($password , PASSWORD_DEFAULT);

    $sql = ("INSERT INTO users (role_id, name, user_name, email, password, phone_number, address) VALUES ('$role_id', '$name', '$user_name', '$email', '$has_pass', '$phone', '$address')");

    if(mysqli_query($db, $sql)){
        echo "Success";
    }

}
?>