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
                <th>Profile</th>
                <th>Full Name</th>
                <th>BusinessName</th>
                <th>PhoneNumber</th>
                <th>Address</th>
                <th>Email</th>
                <th>Discription</th>
                <th>Price</th>
                <th>Images</th>
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

                $record = $fetch->post_record();

                $dn = 0;
                while($row = $record->fetch()){
                
                $dn++;

                echo '<tr>
                        <td>'.$dn.'</td>
                        <td><img src="../asset/profile/'.$row['b_profile'].'" alt=""></td>
                        <td>'.$row['full_name'].'</td>
                        <td>'.$row['b_name'].'</td>
                        <td>'.$row['p_number'].'</td>
                        <td>'.$row['address'].'</td>
                        <td>'.$row['email'].'</td>
                        <td>'.$row['discription'].'</td>
                        <td>'.$row['price'].'</td>
                        <td><img src="../asset/post/'.$row['image'].'" alt=""></td>
                        <td>'.$row['date'].'</td>
                        <td><a href="pdelete.php?id='.$row['id'].'" class="a">Delete</a></td>
                    </tr>';
                }
            ?>
        </table>
    </section>
    
</body>
</html>