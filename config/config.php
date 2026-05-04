<?php
$db= mysqli_connect("localhost", "root", "", "nexcart_shop");

if(!$db){
    die("Connection fail:". mysqli_connect_error());
}

session_start();
define('ROLE_SUPER_ADMIN', 1);
define('ROLE_ADMIN', 2);
define('ROLE_MANAGER', 3);
define('ROLE_SALESMAN', 4);
define('ROLE_SUPER', 5);


?>