<?php

    include 'user_crod.php';
    session_start();
    $id     = $_SESSION['user_id'];
    session_destroy();
    header('location:sign-in.php');



?>