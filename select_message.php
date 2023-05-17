<?php

    $conn = mysqli_connect('localhost','root', '12345678', 'bizcamp') or die();

    
    session_start();

    if(isset($_SESSION['user_id'])){
        
        $incoming   = mysqli_real_escape_string($conn, $_POST['incoming']);
        $outcoming   = mysqli_real_escape_string($conn, $_POST['outcoming']);
        $result = "";
        

        $sqls = mysqli_query($conn,"SELECT * FROM message LEFT JOIN user_table ON user_table.user_id = message.outcoming_id WHERE (incoming_ig = {$incoming} AND outcoming_id = {$outcoming}) OR (incoming_ig = {$outcoming} AND outcoming_id = {$incoming})") or die();

        if(mysqli_num_rows($sqls) > 0){

            while($tel = mysqli_fetch_assoc($sqls)){

                if($tel['incoming_ig'] === $incoming){

                    $result .= '<div class="lock">
                        <div class="righting">
                            <div class="text">
                                <p>'.$tel['message'].'</p>
                            </div>
                        </div>
                    </div>';
                }
                else{
                    $result .= '<div class="alter-toggle">
                            <img src="asset/profile/'.$tel['b_profile'].'" alt="">
                            <div class="lefting">
                                <div class="text">
                                    <p>'.$tel['message'].'</p>
                                </div>
                            </div>
                        </div>';
                }

                
                
            }
            echo $result;   
        }
    }
    else{
        echo 'bad';
    }
?>