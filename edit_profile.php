<?php

  include 'user_crod.php';

  $insert = new bizcamp;

  session_start();
  if(!isset($_SESSION['user_id'])){

    header('location:sign-in.php');
  }

  if(isset($_GET['id'])){
    $id = $_GET['id'];
    $row = $insert->show($id);
    $type = $row->fetch();
  }

  if(isset($_POST['save'])){

    $fullName         = $_POST['full_name'];
    $b_name           = $_POST['b_name'];
    $pnumber          = $_POST['pnumber'];
    $y_address        = $_POST['y_address'];
    $email            = $_POST['email'];
    $image            = $_FILES['image']['name'];
    $image_size       = $_FILES['image']['size'];
    $image_tmp_name   = $_FILES['image']['tmp_name'];
    $image_folder     = 'asset/profile/'.$image;

    if(empty($fullName) || empty($b_name) || empty($pnumber) || empty($y_address) || empty($email) || empty($image)){
      $message[]  = 'All Fieald Most Be Required!';
    }
      
    else{
      if($image_size > 400000000){
        $message[]  = 'Images Size Is Too Large!';
      }
      
      else{
        if(!empty($fullName) && !empty($b_name) && !empty($pnumber) && !empty($y_address) && !empty($email) && !empty($image) && is_numeric($pnumber) && $pnumber >= 11){
          $insert->update($fullName, $b_name, $pnumber,$y_address,$email, $id);
          move_uploaded_file($image_tmp_name, $image_folder);
          header('location:sign-in.php');

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
  <link rel="icon" type="image/png" href="images/a.png">
  <title>BizCamp</title>
  <link rel="stylesheet" href="asset/boxicons/css/boxicons.min.css">
</head>
<body>
  <?php include 'asset/layout/head.php';?>

  <section id="login-page">
    <div class="container-log">
      <form method="POST" enctype="multipart/form-data">
        <div class="form-head">
          <h3>Edit Profile</h3>
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
            <input type="text" name="full_name" placeholder=" " value="<?php echo $type['full_name'];?>">
            <label for="">Full Name</label>
          </div>
          <div class="form-group">
            <input type="text" name="b_name" placeholder=" " value="<?php echo $type['b_name'];?>">
            <label for="">Business Name</label>
          </div>
          <div class="form-groups">
            <div class="contects">
              <div class="col-6">
                <input type="text" name="pnumber" placeholder=" " value="<?php echo $type['p_number'];?>">
                <label for="">Phone Number</label>
              </div>
              <div class="col-6">
                <input type="text" name="y_address" placeholder=" " value="<?php echo $type['address'];?>">
                <label for="">Address</label>
              </div>
            </div>
          </div>
          <div class="form-group">
            <input type="text" name="email" placeholder=" " value="<?php echo $type['email'];?>">
            <label for="">Email Address</label>
          </div>
          <div class="form-group">
            <input type="file" name="image" placeholder=" " value="<?php echo $type['b_profile'];?>" accept="image/png, image/jpg, image/jpeg">
            <label for="">Business Profile</label>
          </div>
          <div class="form-group">
            <button name="save">Update</button>
          </div>
          <div class="form-groups">
            <p>You can change password by click here<a href="chagen-password.php?id=<?php echo $_SESSION['b_id'];?>"><i class="bx bx-lock"></i></a></p>
          </div>
        </div>
      </form>
    </div>
  </section>
  
</body>
</html>