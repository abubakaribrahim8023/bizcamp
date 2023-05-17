<?php

    include 'admin_php.php';

    session_start();
    $id  = $_SESSION['admin_id'];
    session_destroy();
    header('location:admin_log.php');

?>