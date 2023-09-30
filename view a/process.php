<?php 





//*************************************This is for comments***************************************************************//

if(isset($_POST['commentar'])){
    $comment = $_POST['commentar'];

    $objektsComment = [
        'comment' => $comment,
        'errComment' => '',
        'msgComment' => ''
    ];

    if(empty($_POST['commentar'])){
        $objektsComment['errComment'] = "Something went wrong, please try again!";
    }else{
        $insertComment = $obj->insert("INSERT INTO comments (`blog_id`, `user_id`, `comment`) VALUES ('', '', '$comment')");
        $objektsComment['msgComment'] = "Success!";
    }

    echo json_encode($objektsComment);
}


?>