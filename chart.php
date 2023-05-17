<?php 
    session_start();
    if(!isset($_SESSION['user_id'])){

        header("location:sign-in.php");
    }

    $conn = mysqli_connect('localhost','root', '12345678', 'bizcamp') or die();

    $id = mysqli_real_escape_string($conn, $_GET['bizcampistgkkjsdmnjdsjnnkkllaoaokajsjhdshhaasjjmsdsdz']);
    $selects = mysqli_query($conn, "SELECT * FROM user_table WHERE user_id = {$id}");

    if(mysqli_num_rows($selects) > 0){
        $fetch = mysqli_fetch_assoc($selects);
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
   
</head>
    <body>
        <section id="messagesss">
            <div class="columns">
                <div class="alter">
                    <div class="alter-header">
                        <a href=""><i class="bx bx-left-arrow-alt"></i></a>
                        <div class="users">
                            <img src="asset/profile/<?php echo $fetch['b_profile'];?>">
                        </div>
                        <div class="alter-name">
                            <h4><?php echo $fetch['full_name'];?></h4> 
                            <p>active</p>
                        </div>
                    </div>
                    <div class="alter-body">
                        <!-- ?php include 'select_message.php';?> -->
                    </div>
                    
                </div>
                <form action="#" method="POST" autocomplete="off" class="alter-footer">
                    <input type="hidden" name="incoming" value="<?php echo $id;?>">
                    <input type="hidden" name="outcoming" value="<?php echo $_SESSION['user_id'];?>">
                    <input type="text" name="message" class="input-field" placeholder="Write message">
                    <button name="send"><i class="bx bx-send"></i></button>
                </form>
            </div>
        </section>
        <script src="chart.js"></script>

    </body>
</html>