<?php

  include 'user_crod.php';

  $insert = new bizcamp;

  if(isset($_POST['save'])){

    $b_id             = $_POST['b_id'];
    $fullName         = $_POST['full_name'];
    $b_name           = $_POST['b_name'];
    $pnumber          = $_POST['pnumber'];
    $y_address        = $_POST['y_address'];
    $email            = $_POST['email'];
    $pass             = $_POST['pass'];
    $cpass            = $_POST['cpass'];
    $image            = $_FILES['image']['name'];
    $image_size       = $_FILES['image']['size'];
    $image_tmp_name   = $_FILES['image']['tmp_name'];
    $image_folder     = 'asset/profile/'.$image;

    if(empty($b_id) || empty($fullName) || empty($b_name) || empty($pnumber) || empty($y_address) || empty($email) || empty($pass) || empty($cpass) || empty($image)){
      $message[]  = 'All fieald most be required!';
    }
    else{
      if(!is_numeric($pnumber) || $pnumber < 11){
        $message[]  = 'Invalide phone number!';
      }
      else{
        if($pass < 5){
          $message[]  = 'Password most be greater than 6 character';
        }
        else{
          if($image_size > 400000000){
            $message[]  = 'Images size is too large!';
          }
          else{
            if($pass != $cpass){
              $message[]  = 'Comfirm password not march!';
            }
            else{
              if(!empty($b_id) && !empty($fullName) && !empty($b_name) && !empty($pnumber) && !empty($y_address) && !empty($email) && !empty($pass) && !empty($cpass) && !empty($image) && is_numeric($pnumber) && $pnumber >= 11 && $pass >= 6){
                
                $check = $insert->validate($b_id, $email);
                if($check->rowCount() > 0){
                  $message[] = "Business id or email already exit!"; 
                }
                else{
                  $insert->store_user($b_id,$fullName, $b_name, $pnumber,$y_address,$email,$pass,$image);
                  move_uploaded_file($image_tmp_name, $image_folder);
                  header('location:sign-in.php');
                }
  
              }
            }
          }
        }
      }
    }

  }
  

?>

<!DOCTYPE html>
<html lang="en">
<head>
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3454126744747191"
     crossorigin="anonymous"></script>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link rel="icon" type="image/png" href="images/a.png">
  <title>BizCamp</title>
</head>
<body>
  <?php include 'asset/layout/head.php';?>

  <section id="login-page">
    <div class="container-log">
      <form method="POST" enctype="multipart/form-data">
        <div class="form-head">
          <h3>Create Account</h3>
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
            <input type="text" name="full_name" placeholder=" " value="<?php if(isset($_POST['save'])){ echo $_POST['full_name'];}?>">
            <label for="">Full Name</label>
          </div>
          <div class="form-group">
            <input type="text" name="b_name" placeholder=" " value="<?php if(isset($_POST['save'])){ echo $_POST['b_name'];}?>">
            <label for="">Business Name</label>
          </div>
          <div class="form-groups">
            <div class="contects">
              <div class="col-6">
                <input type="text" name="pnumber" placeholder=" " value="<?php if(isset($_POST['save'])){ echo $_POST['pnumber'];}?>">
                <label for="">Phone Number</label>
              </div>
              <div class="col-6">
                <input type="text" name="y_address" placeholder=" " value="<?php if(isset($_POST['save'])){ echo $_POST['y_address'];}?>">
                <label for="">Address</label>
              </div>
            </div>
          </div>
          <div class="form-group">
            <input type="text" name="email" placeholder=" " value="<?php if(isset($_POST['save'])){ echo $_POST['email'];}?>">
            <label for="">Email Address</label>
          </div>
          <div class="form-groups">
            <div class="contects">
              <div class="col-6">
                <input type="password" name="pass" placeholder=" ">
                <label for="">Create Password</label>
              </div>
              <div class="col-6">
                <input type="password" name="cpass" placeholder=" ">
                <label for="">Re-type Password</label>
              </div>
            </div>
          </div>
          <div class="form-group">
            <input type="file" name="image" placeholder=" " value="Business Profile" accept="image/png, image/jpg, image/jpeg">
            <label for="">Business Profile</label>
          </div>
          <div class="form-group">
            <input type="text" name="b_id"  placeholder=" ">
            <label for="">Create Business Number</label>
          </div>
          <div class="form-group">
            <button name="save">Save</button>
          </div>
          <div class="form-groups">
            <p>Already have an account? <a href="sign-in.php">click here</a></p>
          </div>
        </div>
      </form>
    </div>
  </section>
  
</body>
</html>