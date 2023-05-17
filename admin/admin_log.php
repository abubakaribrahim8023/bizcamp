<?php

  include 'admin_php.php';

  $insert = new admin_form;

  session_start();

  if(isset($_POST['login'])){


    $user          = $_POST['u_name'];
    $pass             = $_POST['pass'];



    if(empty($user) || empty($pass)){
      $message[]  = 'Invalide Atemp';
    }
    else{
      if($user < 15){
        $message[]  = 'Invalide User Name!';
      }
      else{
        if(!empty($user) && !empty($pass) && $user >= 15){

          $login = $insert->admin_log($user,$pass);

          while($fetch = $login->fetch()){
            
            $_SESSION['full_name']  = $fetch['full_name'];
            $_SESSION['admin_id']  = $fetch['admin_id'];
          }

          if($login->rowCount() > 0){
            header('location:admin_profile.php');
          }
          else{
            $message[]  = 'Warning: Only admin can login here';
          }

        }
      }
    }

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
    <section id="logs">
        <div class="log-form">
            <form action="" method="POST">
                <div class="form">
                    <div class="form-head">
                        <div class="head">
                            <h4>Admin Panel</h4>
                        </div>
                    </div>
                    <div class="form-group">
                    <?php

                        if(isset($message)){
                            foreach($message as $message){
                                echo '<div class="alert-warning">'.$message.'</div>';
                            }
                        }

                    ?>
                    </div>
                    <div class="form-group">
                        <label for="">User Name</label>
                        <input type="text" name="u_name" placeholder="Enater User Name">
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" name="pass" placeholder="Enter Password">
                    </div>
                    <div class="form-group">
                        <button name="login">Visit !</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
    
</body>
</html>