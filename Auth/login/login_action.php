<?php
include('../../config/config.php');

if(isset($_POST['login'])){
    $userInput = $_POST['email_name'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email = '$userInput' OR user_name = '$userInput' LIMIT 1";

    $result = mysqli_query($db, $sql);

    if(mysqli_num_rows($result)>0)


}
?>