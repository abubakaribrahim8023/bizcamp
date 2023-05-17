<?php

    $conn = mysqli_connect('localhost','root', '12345678', 'bizcamp') or die();

    session_start();

    // include 'user_crod.php';

    // $insert = new bizcamp;

    // session_start();
    // if(!isset($_SESSION['user_id'])){

    // header('location:sign-in.php');
    // }

    // if(isset($_GET['id'])){
    //     $id = $_GET['id'];
    //     $row = $insert->chart_fetch($id);
    //     $fetch = $row->fetch();
    //   }

    if(isset($_SESSION['user_id'])){
        
        $incoming   = mysqli_real_escape_string($conn, $_POST['incoming']);
        $outcoming   = mysqli_real_escape_string($conn, $_POST['outcoming']);
        $message   = mysqli_real_escape_string($conn, $_POST['message']);

        if(!empty($message)){

            $insert  	= mysqli_query($conn, "INSERT INTO  message(incoming_ig, outcoming_id, message) VALUES({$incoming}, {$outcoming}, '{$message}')") or die();
        }
        echo 'welcome';
    }
    else{
        header("location:sign-in.php");
    }
?>