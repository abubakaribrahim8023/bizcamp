<?php

    include 'user_crod.php';
    session_start();
    $insert = new bizcamp;

    if(isset($_POST['send'])){

        $uname      = $_POST['uname'];
        $email      = $_POST['email'];
        $mess       = $_POST['message'];

        if(empty($uname) || empty($email) || empty($mess)){

            $message[] = "<div class='alert'>Fieald most be empty!</div>";
        }
        else{
            if(!empty($uname) && !empty($email) && !empty($mess)){
                $message[] = "<div class='alert-green
                '>Message Send Successfuly!</div>";
                $insert->contact_us($uname,$email,$mess);
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
    <?php

        include 'asset/layout/head.php';
    
    
    ?>
    <div class="contentss">
        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3454126744747191"
            crossorigin="anonymous"></script>
        <!-- Business Camp -->
        <ins class="adsbygoogle"
            style="display:block"
            data-ad-client="ca-pub-3454126744747191"
            data-ad-slot="1614997595"
            data-ad-format="auto"
            data-full-width-responsive="true"></ins>
        <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
    </div>
    <section id="contacts-us">
        <div class="comfom">
            <div class="tabele">
                <div class="img">
                    <img src="images/a.png" alt="">
                </div>
            </div>
            <div class="tabeles">
                <form action="" method="POST" encty[e="multipart/form-data">
                    <div class="form-head">
                        <h4>For Any Enquiry</h4>
                        <p>message us</p>
                    </div>
                    <div class="form-body">
                        <div class="form-group">
                            <?php

                                if(isset($message)){
                                    foreach($message as $message){
                                        echo $message;
                                    }
                                }
                            
                            
                            ?>
                        </div>
                        <div class="form-group">
                            <label for="">User Name</label>
                            <input type="text" name="uname" placeholder="User Name">
                        </div>
                        <div class="form-group">
                            <label for="">Email Or Ph<a href="admin/admin_log.php">o</a>ne Number</label>
                            <input type="text" name="email" placeholder="Email Address Or Phone Number">
                        </div>
                        <div class="form-group">
                            <label for="">Message</label>
                            <textarea name="message">Write Message</textarea>
                        </div>
                        <div class="form-group">
                            <button name="send">Send</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>
</html>