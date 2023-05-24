<?php

  include 'user_crod.php';
  include 'asset/layout/head.php';

  $insert = new bizcamp;

  session_start();

  if(isset($_POST['login'])){


    $pnumber          = $_POST['pnumber'];
    $pass             = $_POST['pass'];



    if(empty($pnumber) || empty($pass)){
      $message[]  = 'All fieald most be required!';
    }
    else{
      if(!is_numeric($pnumber) || $pnumber < 11){
        $message[]  = 'invalide phone number!';
      }
      else{
        if(!empty($pnumber) && !empty($pass) && is_numeric($pnumber) && $pnumber >= 11){

          $login = $insert->log_user($pnumber,$pass);

          while($row  = $login->fetch()){
            $_SESSION['user_id']  = $row['user_id'];
            $_SESSION['full_name']  = $row['full_name'];
            $_SESSION['b_name']  = $row['b_name'];
            $_SESSION['b_profile']  = $row['b_profile'];
            $_SESSION['p_number']  = $row['p_number'];
            $_SESSION['address']  = $row['address'];
            $_SESSION['email']  = $row['email'];
            $_SESSION['password']  = $row['password'];
            $_SESSION['b_id']  = $row['b_id'];
          }

          if($login->rowCount() > 0){

            header('location:user_profile.php');
          }
          else{
            $message[]  = 'Incorrect email or password!';
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

  <section id="login-page">
    <div class="container-log">
      <form method="POST">
        <div class="form-head">
          <h3>Login</h3>
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
            <input type="text" name="pnumber" placeholder=" " value="<?php if(isset($_SESSION['p_number'])){ echo $_SESSION['p_number'];}?>">
            <label for="">Phone Number</label>
          </div>
          <div class="form-group">
            <input type="password" name="pass" placeholder=" ">
            <label for="">Password</label>
          </div>
          <div class="form-groupt">
            <a href="tel:+2348037858023">Forgot password ?</a>
          </div>
          <div class="form-group">
            <button name="login">Visit !</button>
          </div>
          <div class="form-groups">
            <p>Don't have an account? <a href="sign-up.php">click here</a></p>
          </div>
        </div>
      </form>
    </div>
  </section>
  
</body>
</html>