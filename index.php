<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BizCamp</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="asset/boxicons/css/boxicons.min.css">
    <link rel="icon" type="image/png" href="images/a.png">
    <!-- <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3454126744747191"
     crossorigin="anonymous"></script> -->
</head>
<body>
    <?php include 'asset/layout/head.php';?>
    
    <!-- posting section  -->
    <div class="contentss">
        <!-- <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3454126744747191"
            crossorigin="anonymous"></script>
        !-- Business Camp --
        <ins class="adsbygoogle"
            style="display:block"
            data-ad-client="ca-pub-3454126744747191"
            data-ad-slot="1614997595"
            data-ad-format="auto"
            data-full-width-responsive="true"></ins>
        <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
        </script> -->
    </div>
    <section id="POST">
        <div class="content">
            <div class="text-data">
                <marquee>Welcome To Business Camp Click Here To Getstart? <a href="sign-up.php" class="a">Create Account</a></marquee>
            </div>
        </div>
        <div class="post-get">
            <div class="post-header">
                <h3>Ads</h3>
                <p>Buy Product</p>
            </div>
            <div class="post-block">
                <!-- 1 1 block Product -->
                <?php

                    include 'user_crod.php';

                    $add = new bizcamp;

                    $fetch = $add->fetch_post_data();

                    while($row = $fetch->fetch()){

                        echo '<div class="post-term">
                                <div class="user">
                                    <div class="user-head">
                                        <img src="asset/profile/'.$row['b_profile'].'" alt="">
                                        <div class="name">
                                            <h4>'.$row['b_name'].'</h4>
                                            <p>@'.$row['full_name'].'</p>
                                            <p>'.$row['date'].'</p>
                                        </div>
                                    </div>
                                    <div class="content-description">
                                        <p>'.$row['discription'].'</p>
                                        <img src="asset/post/'.$row['image'].'" alt="">
                                        <div class="price">
                                            <p><del><del>N</del></del></p>
                                            <p>'.$row['price'].'</p>
                                        </div>
                                        <div class="address">
                                            <h4>Address:&nbsp;</h4>
                                            <p>'.$row['address'].'</p>
                                        </div>
                                        <div class="contact">
                                            <h4>Contact:&nbsp;</h4>
                                            <div class="icons">
                                                <a href="tel:'.$row['p_number'].'"><i class="bx bx-phone"></i></a>
                                                <a href="mailto:'.$row['email'].'"><i class="bx bxl-gmail"></i></a>
                                                <a href="http://www.facebook.com"><i class="bx bxl-facebook"></i></a>
                                                <a href="http://www.whatsapp.com"><i class="bx bxl-whatsapp"></i></a>
                                                <a href="http://www.instagram.com"><i class="bx bxl-instagram"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>';
                    }
                
                ?>
            </div>
        </div>
    </section>
    

    <div class="loader">
        <div class="spanner"></div>
    </div>
</body>
</html>