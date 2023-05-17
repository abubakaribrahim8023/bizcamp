<?php

  include 'user_crod.php';

  $insert = new bizcamp;

  session_start();

  if(!isset($_SESSION['user_id'])){

    header('location:sign-in.php');
  }

  if(isset($_POST['post'])){

    $fullName         = $_POST['full_name'];
    $b_name           = $_POST['b_name'];
    $pnumber          = $_POST['p_number'];
    $y_address        = $_POST['address'];
    $email            = $_POST['email'];
    $b_profile             = $_POST['b_profile'];

    $pass            = $_POST['discription'];
    $cpass            = $_POST['price'];
    $image            = $_FILES['image']['name'];
    $image_size       = $_FILES['image']['size'];
    $image_tmp_name   = $_FILES['image']['tmp_name'];
    $image_folder     = 'asset/post/'.$image;

    if(empty($fullName) || empty($b_name) || empty($pnumber) || empty($y_address) || empty($email) || empty($pass) || empty($cpass) || empty($image)){
      $message[]  = 'All Fieald Most Be Required!';
    }
    else{
      if(!is_numeric($pnumber) || $pnumber < 11){
        $message[]  = 'Invalide Phone Number!';
      }
      else{
        if($pass < 6){
          $message[]  = 'Password Most Be Greater Than 6 Character';
        }
        else{
          if($image_size > 400000000){
            $message[]  = 'Images Size Is Too Large!';
          }
          else{
           
            if(!empty($fullName) && !empty($b_name) && !empty($pnumber) && !empty($y_address) && !empty($email) && !empty($pass) && !empty($cpass) && !empty($image) && is_numeric($pnumber) && $pnumber >= 11 && $pass >= 6){
              $insert->posting_data($fullName, $b_name, $pnumber,$y_address,$email,$b_profile,$pass,$cpass,$image);
              move_uploaded_file($image_tmp_name, $image_folder);
              header('location:user_profile.php?mess=Upload Post Successfuly');

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
      <form method="POST" enctype="multipart/form-data">
        <div class="form-head">
          <h3>Upload Business Post</h3>
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
            <input type="text" name="discription" placeholder=" ">
            <label for="">Discription</label>
          </div>
          <div class="form-group">
            <input type="text" name="price" placeholder=" ">
            <label for="">Price</label>
          </div>
          <div class="form-group">
            <input type="file" name="image" placeholder=" " value="Business Image" accept="image/jpg, image/png, image/jpeg">
            <label for="">Business Image</label>
          </div>

          <div class="form-group">
            <input type="text" name="b_profile" value="<?php echo $_SESSION['b_profile'];?>" hidden>
          </div>

          <div class="form-group">
            <input type="text" name="full_name" value="<?php echo $_SESSION['full_name'];?>" hidden>
          </div>

          <div class="form-group">
            <input type="text" name="b_name" value="<?php echo $_SESSION['b_name'];?>" hidden>
          </div>

          <div class="form-group">
            <input type="text" name="p_number" value="<?php echo $_SESSION['p_number'];?>" hidden>
          </div>
          <div class="form-group">
            <input type="text" name="email" value="<?php echo $_SESSION['email'];?>" hidden>
          </div>
          <div class="form-group">
            <input type="text" name="address" value="<?php echo $_SESSION['address'];?>" hidden>
          </div>
          <div class="form-group" style="padding-bottom: 20px;">
            <button name="post">Post</button>
          </div>
        </div>
      </form>
    </div>
  </section>
  
</body>
</html>