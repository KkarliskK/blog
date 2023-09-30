<?php
include '../controller/header_ctr.php';

$loggedIn = isLoggedIn();



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>
<body onload="startTime()">

<div class="header-bar-container">
        <div class="header-profile">
                <a class="header-item" href="index.php"><i class="bi bi-layout-text-sidebar-reverse"></i>Blogs</a>
                <a style="<?php if($loggedIn){echo "";}else{echo "display: none";} ?>" class="header-item" href="http://into.id.lv/ipb21/karlis/school/blogs/view/profile.php"><i class="bi bi-person"></i>My Profile</a>
                <a style="<?php if($loggedIn){echo "";}else{echo "display: none";} ?>" class="header-item" href="http://into.id.lv/ipb21/karlis/school/blogs/view/addBlog.php"><i class="bi bi-pencil-square"></i>New Blog</a>
                <a class="header-item" href="http://into.id.lv/ipb21/karlis/school/blogs/view/settings.php"><i class="bi bi-gear"></i>Settings</a>
                <button><a class="header-item"><i class="bi bi-moon-fill" id="toggleDark"></i></a></button>
                <button onclick="logOut()" id="login"><a href="login.php" id="loginOut"><i class="bi bi-box-arrow-in-right"></i><?php if($loggedIn){echo "Log Out";}else{echo "Log In";} ?></a></button>
        </div>
        <div></div>
        <div class="header-clock" name="clock" id="txt"></div><!--This is clock at the top corner-->
</div> 


<script src="../public/functions.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
