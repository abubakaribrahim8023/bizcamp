<div id="header">
    <div class="logo">
        <img src="images/a.png">
    </div>
    <h3>BizCamp</h3>
</div>
<div id="sidenav">
    <nav>
        <ul>
            <li>
                <a href="index.php">Home</a>
            </li>
            <li>
                <a href="user_profile.php">Profile</a>
            </li>
            <li>
                <a href="user_post-data.php">Upload Post</a>
            </li>
            <li>
                <a href="frequantly-question.php">Contact Us</a>
            </li>

            <li>
                <a href="sign-in.php">Sign-in</a>
            </li>

        </ul>
    </nav>
</div>
<div class="txt">
    <a href="users_chart.php"><img src="images/mess.png" alt="" id="messsges"></a>
</div>
<div id="menubtn">
    <img src="images/menu.jpg" id="menu">

</div>


<script>
        var menubtn = document.getElementById("menubtn");
        var sidenav = document.getElementById("sidenav");
        var menu = document.getElementById("menu");
        sidenav.style.right = "-250px";
        menubtn.onclick = function(){
            if(sidenav.style.right == "-250px"){
                sidenav.style.right = "0";
                menu.src="images/close.png.png";
            }
            else{
                sidenav.style.right = "-250px";
                menu.src = "images/menu.jpg";
            }
        }
        

    </script>