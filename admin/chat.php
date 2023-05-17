<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>BizCamp</title>
    <link rel="icon" type="image/png" href="images/a.png">
</head>
<body>
    <?php include 'layout.php';?>
    <section id="table">
        <table id="customers">
            <tr><?php
                if(isset($_GET['mess'])){
                    echo '<div class="alert-success">'.$_GET['mess'].'</div>';
                }
            
            ?></tr>
            <tr>
                <th>S/N</th>
                <th>User Name</th>
                <th>Email</th>
                <th>Message</th>
                <th>Date</th>
                <th colspan="2">Actions</th>
            </tr>
            <?php   

                include 'admin_php.php';

                $fetch = new admin_form;
                session_start();

                if(!isset($_SESSION['full_name'])){

                    header('location:admin_log.php');

                }

                $record = $fetch->chat_record();

                $dn = 0;
                while($row = $record->fetch()){
                
                $dn++;

                echo '<tr>
                        <td>'.$dn.'</td>
                        <td>'.$row['incoming_ig'].'</td>
                        <td>'.$row['outcoming_id'].'</td>
                        <td>'.$row['message'].'</td>
                        <td>'.$row['timess'].'</td>
                        <td><a href="#" class="a">Delete</a></td>
                    </tr>';
                }
            ?>
        </table>
    </section>
    
</body>
</html>