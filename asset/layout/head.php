
<link rel="stylesheet" href="asset/fontawesome-free/css/all.min.css">
<div id="sidenav">
    <nav>
        <ul>
            <p onclick="closeMenu()">&times;</p>
            <li>
                <a href="user_profile.php">
                    <i class="fa fa-user"></i>
                    <span>my profile</span>
                </a>
            </li>
            <li>
                <?php
                    if(isset($_SESSION['b_id'])){
                        echo '<a href="edit_profile.php?id='.$_SESSION['b_id'].';?>">
                        <i class="fa fa-edit"></i>
                        <span>edit profile</span>
                    </a>';
                    }
                
                ?>
            </li>
      
            <li>
            <a href="frequantly-question.php"><i class="fa fa-phone-alt"></i>
                <span>contact us</span></a>
            </li>

            <li>
                <a href="sign-in.php"><i class="fa fa-sign-in-alt"></i>
                <span>login</span></a>
            </li>

        </ul>
    </nav>
</div>
<div class="main">
    <div class="head">
        <div class="text">
            <i class="fa fa-home"></i>
            <h5>BizCamp</h5>
        </div>
        <div class="link">
            <a href="index.php"><i class="fa fa-home"></i></a>
            <a href="users_chart.php"><i class="fa fa-comment-dots"></i></a>
            <a href="user_post-data.php"><i class="fa fa-file-upload"></i></a>
            <a href="logout.php"><i class="fa fa-sign-out-alt"></i></a>
        </div>
    </div>
    <div class="icons">       
        <?php
          if(empty($_SESSION['b_profile'])){
            echo '<img src="images/user.jpg" onclick="openMenu()">';
          }
          else{
            echo '<img src="asset/profile/'.$_SESSION['b_profile'].'" onclick="openMenu()">';
          }
        
        ?> 
       
    </div>
</div>

<!-- <div class="txt">
    <a href="users_chart.php"><img src="images/images.png" alt="" id="messsges"></a>
</div>
<div id="menubtn">
    <img src="images/menu.jpg" id="menu" onclick="openMenu()">
</div> -->


<script type="text/javaScript">

    function openMenu(){
        document.getElementById('sidenav').style.height = "250px";
        // document.getElementById('menu').style.displaye = "none";
    }
    function closeMenu(){
        document.getElementById('sidenav').style.height = "0";
    }

</script>