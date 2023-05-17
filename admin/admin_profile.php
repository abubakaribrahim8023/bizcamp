<?php

    include 'admin_php.php';

    session_start();

    if(!isset($_SESSION['full_name'])){

        header('location:admin_log.php');

    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BizCamp</title>
  <link rel="icon" type="image/png" href="images/a.png">
  <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include 'layout.php';?>

    <section id="admin">
        <div class="container">
            <div class="col-4">
                <div class="profile">
                    <img src="images/user.jpg" alt="">
                    <div class="link">
                        <h4><?php echo $_SESSION['full_name'];?></h4>
                        <p>superadmin@bizcamp.gcca.com.ng</p>
                        <div class="pink">
                            <a href="admin_edit.php?id=<?php echo $_SESSION['admin_id'];?>">Edit Profile</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-8">
                <form action="" method="POST">
                    <div class="form">
                        <div class="form-head">
                            <h4>Send Message</h4>
                            <p>send message with email to our user</p>
                        </div>
                        <div class="form-group">
                            <label for="">Admin Name</label>
                            <input type="text" name="a_name" placeholder="Admin Name">
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" name="email" placeholder="Email Address">
                        </div>
                        <div class="form-group">
                            <label for="">Message</label>
                            <textarea name="message">Write Message</textarea>
                        </div>
                        <div class="form-group">
                            <button>Send</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>
</html>