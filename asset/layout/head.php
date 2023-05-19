<link rel="stylesheet" href="asset/boxicons/css/boxicons.min.css">
<div id="header">
    <div class="logo">
        <img src="images/a.png">
    </div>
    <h3>BizCamp</h3>
</div>
<div id="sidenav">
    <nav>
        <ul>
            <p onclick="closeMenu()">&times;</p>
            <li>
                
            </li>
            <li>
                <a href="index.php">
                    <i class="bx bx-home"></i>
                    <span>home</span>
                </a>
            </li>
            <li>
                <a href="user_profile.php">
                    <i class="bx bx-user"></i>
                    <span>profile</span>
                </a>
            </li>
            <li>
                <a href="users_chart.php">
                    <i class="bx bx-message"></i>
                    <span>message</span>
                </a>
            </li>
            <li>
            <a href="user_post-data.php"><i class="bx bx-upload"></i>
                <span>upload post</span></a>
            </li>
            <li>
            <a href="frequantly-question.php"><i class="bx bx-phone"></i>
                <span>contact us</span></a>
            </li>

            <li>
                <a href="sign-in.php"><i class="bx bx-log-out"></i>
                <span>sign-in</span></a>
            </li>

        </ul>
    </nav>
</div>
<div class="txt">
    <a href="users_chart.php"><img src="images/images.png" alt="" id="messsges"></a>
</div>
<div id="menubtn">
    <img src="images/user.jpg" id="menu" onclick="openMenu()">
</div>


<script type="text/javaScript">

    function openMenu(){
        document.getElementById('sidenav').style.height = "350px";
    }
    function closeMenu(){
        document.getElementById('sidenav').style.height = "0";
    }

</script>