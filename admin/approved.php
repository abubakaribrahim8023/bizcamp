<?php

    include 'admin_php.php';
    $class = new admin_form;
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        
    }

    $all = $class->approved($id);
    if($all){
        header('location:approvel.php?mess=Approved Sucessfully');
    }
    else{
        echo 'failes';
    }



?>