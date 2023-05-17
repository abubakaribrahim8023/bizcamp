<div id="header">
    <div class="logo">
        <img src="images/a.png" alt="">
    </div>
    <h3>Super Admin</h3>
</div>
<div id="sidenav">
    <nav>
        <ul>
            <li>
                <a href="admin_profile.php">Admin Profile</a>
            </li>
            <li>
                <a href="user_fetch.php">User Record</a>
            </li>
            <li>
                <a href="post_record.php">Post Record</a>
            </li>
            <li>
                <a href="message.php">Message Record</a>
            </li>
            <li>
                <a href="chat.php">Chat Record</a>
            </li>
            <li>
                <a href="logout.php">Sign-out</a>
            </li>

        </ul>
    </nav>
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