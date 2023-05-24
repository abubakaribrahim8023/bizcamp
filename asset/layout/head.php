<link rel="stylesheet" href="asset/boxicons/css/boxicons.min.css">
<div id="sidenav">
    <nav>
        <ul>
            <p onclick="closeMenu()">&times;</p>
            <li>
                <a href="user_profile.php">
                    <i class="bx bx-user"></i>
                    <span>my profile</span>
                </a>
            </li>
            <li>
                <?php
                    if(isset($_SESSION['b_id'])){
                        echo '<a href="edit_profile.php?id='.$_SESSION['b_id'].';?>">
                        <i class="bx bx-edit"></i>
                        <span>edit profile</span>
                    </a>';
                    }
                
                ?>
            </li>
      
            <li>
            <a href="frequantly-question.php"><i class="bx bx-phone"></i>
                <span>contact us</span></a>
            </li>

            <li>
                <a href="sign-in.php"><i class="bx bx-log-out"></i>
                <span>login</span></a>
            </li>

        </ul>
    </nav>
</div>
<div class="main">
    <div class="head">
        <div class="text">
            <h4>B</h4>
            <h5>BizCamp</h5>
        </div>
        <div class="link">
            <a href="index.php"><i class="bx bx-home"></i></a>
            <a href="users_chart.php"><i class="bx bx-message"></i></a>
            <a href="user_post-data.php"><i class="bx bx-upload"></i></a>
            <a href="logout.php"><i class="bx bx-log-out"></i></a>
        </div>
    </div>
    <div class="icons">
        <input type="text" placeholder="search">
        <i class="bx bx-search"></i>
        <?php
            // session_start();
            if(isset($_SESSION['b_profile'])){

                echo " <img src='images/23.jpg' onclick='openMenu()'>";
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