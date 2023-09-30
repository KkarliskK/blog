<?php
include '../model/blog_mod.php';

function index()
{
    $obj = new Blog;
    $post = $obj->select();

    $posts = [
        "posts"=> $post,
    ];

    return $posts;
}

function blogView($id){
    $obj = new Blog;
    $view = $obj->selectSingle($id);

    $singleView = [
        "singleView" => $view,
    ];
    return $singleView;
}

function comment(){
    $obj = new Blog;
    $comment = $obj->selectComment();

    $commentars = [
        "commentars"=> $comment,
    ];

    return $commentars;
}


?>
