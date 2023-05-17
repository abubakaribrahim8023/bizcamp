<?php

  include 'user_crod.php';
  $select = new bizcamp;
  session_start();

  $outcoming_id = $_SESSION['user_id'];

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
    <title>BizCamp</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="asset/boxicons/css/boxicons.min.css">
    <link rel="icon" type="image/png" href="images/a.png">
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3454126744747191"
     crossorigin="anonymous"></script>
</head>
<body>

    <section id="chart">
        <div id="container">
            <div class="messgaes">
                <div class="chart-head">
                    <?php

                        if($_SESSION['b_profile'] == ''){
                            
                            echo '<img src="images/user.jpg" alt="">';
                        }
                        else{
                            echo '<img src="asset/profile/'.$_SESSION['b_profile'].'" alt="">';
                        }
                    
                    ?>
                    <div class="compose">
                        <div class="user-litle">
                            <h4><?php echo $_SESSION['full_name'];?></h4>
                            <div class="active">
                                <p>active </p>
                                <div class="active-icon"></div>
                            </div>
                        </div>
                        <div class="user-out">
                            <button><a href="logout.php"><i class="bx bx-home"></i></a> </button>
                        </div>
                    </div>
                </div>
                <div class="chart-title">
                    <div class="input-group">
                        <input type="text" placeholder=" " id="searchbar" onkeyup="search_animal()" type="text"
		name="search">
                        <label for="">Search</label>
                    </div>
                    <i class="bx bx-search"></i>
                </div>
                <div class="chart-body">
                    <?php
                        $conn = mysqli_connect('localhost','root', '12345678', 'bizcamp') or die();
                        
                        $add = $select->user_chart();
                        while($row = $add->fetch()){
                            
                            $sql3 = mysqli_query($conn, "SELECT * FROM message WHERE (incoming_ig = {$row['user_id']}
                                                         OR outcoming_id = {$row['user_id']}) AND (outcoming_id = {$outcoming_id}
                                                         OR outcoming_id = {$outcoming_id}) ORDER BY messgae_id DESC LIMIT 1");
                            
                            $row2 = mysqli_fetch_assoc($sql3);
                            if(mysqli_num_rows($sql3) > 0){

                                $result = $row2['message'];
                            }
                            else{
                                $result = "No message available";
                            }

                            (strlen($result) > 20) ? $message = substr($result, 0, 20) : $message = $result;

                            echo '<div class="user">
                                <div class="logo">
                                    <img src="asset/profile/'.$row['b_profile'].'" alt="">
                                    <div class="space">
                                        <div class="names">
                                            <h4>'.$row['full_name'].'</h4>
                                            <p>'.$message.'</p>
                                        </div>
                                        <div class="activess">
                                            <a href="chart.php?bizcampistgkkjsdmnjdsjnnkkllaoaokajsjhdshhaasjjmsdsdz='.$row['user_id'].'" id="a"><img src="images/mess.png" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                            </div>';
                        }
                    
                    
                    ?>
                </div>
            </div>
        </div>
    </section>
    <!-- linking javascript -->
	<script type="text/javaScript">
        // JavaScript code
        function search_animal() {
            let input = document.getElementById('searchbar').value
            input=input.toLowerCase();
            let x = document.getElementsByClassName('user');
            
            for (i = 0; i < x.length; i++) {
                if (!x[i].innerHTML.toLowerCase().includes(input)) {
                    x[i].style.display="none";
                }
                else {
                    x[i].style.display="list-item";				
                }
            }
        }

    </script>
</body>
</html>
