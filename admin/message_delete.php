<?php

    include 'admin_php.php';

    $int = new admin_form;

    if(isset($_GET['dlel'])){

        $data = $_GET['dlel'];
        $dels = $int->message_delete($data);
        header('location:message.php?mess=Delete Record Successfuly!');

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
                <a href="message.php" class="a">Cancel</a>
            </div>
            <div class="btn">
                <a href="message_delete.php?dlel=<?php echo $_GET['id'];?>">Delete</a>
            </div>
        </form>
    </section>
    
</body>
</html>