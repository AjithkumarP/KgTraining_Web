<?php
if (!mysqli_connect_errno($conn = mysqli_connect('localhost', 'root', '', 'testphp'))) {
    
    $result = mysqli_query($conn, "SELECT * FROM `testphp`.`users2` WHERE `username`='".$_REQUEST['username']."';");
    
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            if($_REQUEST['password'] == $row['password']){
                echo "<html><body><h1>success";
                }else{
                    echo "failure";
                    }
                }
            }
            mysqli_close($conn);
        }