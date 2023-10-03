<?php

function isLoggedIn(){
    session_start();
    if(isset($_SESSION['user_id'])){
        return true;
    }else{
        return false;
    }
}

if(isset($_POST['logout']) && $_POST['logout'] == true){
    session_start();
    session_destroy();
    echo json_encode("ir");
}



?>