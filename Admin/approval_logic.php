<?php
include '../config/config.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $update = "UPDATE users SET status = 1 WHERE id = $id";

    if (mysqli_query($db, $update)) {
        header("Location:admin_dashboard.php ?msg=User Approved");
    } else {
        echo "Error: " . mysqli_error($db);
    }
}
?>