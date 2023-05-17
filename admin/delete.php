<?php

    include 'admin_php.php';

    $int = new admin_form;

    if(isset($_GET['del'])){

        $del = $_GET['del'];
        $dels = $int->delete($del);
        header('location:user_fetch.php?mess=Delete User Data Successfuly!');

    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BizCamp</title>
    <link rel="icon" type="image/png" href="images/a.png">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <?php include 'layout.php';?>

    <section id="delete">
        <form action="" method="post">
            <div class="btn">
                <a href="user_fetch.php" class="a">Cancel</a>
            </div>
            <div class="btn">
                <a href="delete.php?del=<?php echo $_GET['id'];?>">Delete</a>
            </div>
        </form>
    </section>
    
</body>
</html>