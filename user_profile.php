<?php

  include 'user_crod.php';
  session_start();


  if(!isset($_SESSION['user_id'])){

    header('location:sign-in.php');
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
  <link rel="stylesheet" href="asset/fontawesome-free/css/all.min.css">
</head>
<body>
  <?php include 'asset/layout/head.php';?>
  <section id="profile">
    <div class="container-logs">
      <img src="images/bg_logo.png" alt="" class="profile-user">
      <div class="user-profile">
        <?php
          if($_SESSION['b_profile'] == ""){
            echo '<img src="images/user.jpg">';
          }
          else{
            echo '<img src="asset/profile/'.$_SESSION['b_profile'].'">';
          }
        
        ?> 
        <div class="name">
          <h4><?php echo $_SESSION['full_name'];?></h4>
          <p>@<?php echo $_SESSION['b_name'];?></p>
          <div class="edit">
            <a href="edit_profile.php?id=<?php echo $_SESSION['b_id'];?>">Edit Profile</a>
          </div>
          <div class="icons">
            <a href="index.php"><i class="fa fa-home"></i></a>
            <a href="user_post-data.php"><i class="fa fa-file-upload"></i></a>
            <a href="logout.php"><i class="fa fa-sign-out-alt"></i></a>
          </div>
          <hr>
          <div class="text">
            <p>Hi! <span><?php echo $_SESSION['full_name'];?>,</span> Welcome To BizCamp Now Your Can Start Share Your Business.</p>
            <p>
              <?php

                if(isset($_GET['mess'])){
                  echo '<div class="alert-green">'.$_GET['mess'].'</div>';
                }
              
              ?>
            </p>
          </div>
        </div>      
      </div>
    </div>
  </section>
</body>
</html>