<?php

if($_SERVER['REQUEST_METHOD']=='POST'){

    if(!empty($_POST['username']) && !empty($_POST['password'])){
        $current = true;
    }
    else{
        $current = false;
    }

    if($current){

        $username   = $_POST['username'];
        $password   = $_POST['password'];
    
        require_once('../../connect.php');
    
        $checkSQL  = "SELECT * FROM tbl_user WHERE username = '$username' AND password = ". "'" . $_POST['password'] . "'";
        $savedata = mysqli_query($connect, $checkSQL);
    
    
        if(mysqli_num_rows($savedata) > 0){
            echo "success";
        }
        else{
            echo 'login_failed';
        }
    
        mysqli_close($connect);

    }

}