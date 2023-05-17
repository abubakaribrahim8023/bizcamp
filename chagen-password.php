<?php

  include 'user_crod.php';

  $insert = new bizcamp;

  session_start();
  
  if(!isset($_SESSION['user_id'])){

    header('location:sign-in.php');
  }
  
  if(isset($_GET['id'])){
    $id = $_GET['id'];
  }

  if(isset($_POST['pass'])){

    $oldPass    = $_POST['old_password'];
    $newPass    = $_POST['new_password'];
    $cpass    = $_POST['r-password'];

    if(empty($oldPass) || empty($newPass) || empty($cpass)){
        $message[]  = 'All Fieald Must Be Empty !';
    }
    else{
        if($newPass != $cpass){
            $message[]   = 'Comfirm Password Not March !';
        }
        else{
            if(!empty($oldPass) && !empty($newPass) && !empty($cpass)){

                $check = $insert->check_old_password($id,$oldPass);
                if($check->rowCount() > 0){
                    $mess = $insert->update_password($newPass, $id);
                    header('location:user_profile.php?mess=Change Password Successfully');
                }
                else{
                  $message[]    = 'Old Password Not March!';
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
  <link rel="stylesheet" href="style.css">
  <title>BizCamp</title>
  <link rel="icon" type="image/png" href="images/a.png">
</head>
<body>
  <?php include 'asset/layout/head.php';?>

  <section id="login-page">
    <div class="container-log">
      <form method="POST">
        <div class="form-head">
          <h3>Change Password</h3>
        </div>
        <div class="form-body">
            <div class="form-group">
            <?php

                if(isset($message)){
                foreach($message as $message){
                    echo '<div class="alert">'.$message.'</div>';
                }
                }

                ?>
            </div>
            <div class="form-group">
                <input type="password" name="old_password" placeholder=" ">
                <label for="">Old Password</label>
            </div>
            <div class="form-group">
                <input type="password" name="new_password" placeholder=" ">
                <label for="">New Password</label>
            </div>
            <div class="form-group">
                <input type="password" name="r-password" placeholder="">
                <label for="">Re-typ Password</label>
            </div>
            <div class="form-group">
                <button name="pass">Save</button>
            </div>
            <div class="form-groups">
            </div>
        </div>
      </form>
    </div>
  </section>
  
</body>
</html>