<?php
include '../controller/user_ctr.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Blog | kikd.lv</title>
    <link rel="stylesheet" href="../public/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>
<body onload="startTime()">
    <?php include '../view/include/header.php'; ?> 
        <div class="profile-container-card">
            <div class="profile-main-container">
                <div class="profile-view-container">
                    <h1> How is it going <?php echo $_SESSION['username'] ?>?! Tell us something!</h1>
                </div> 
                <div class="addBlog-menu">
                    <form id="postBlog">
                        <label for="title">Blog Title</label>
                        <input type="text" name="title" id="title">
                        <p style="color:red;" id="errTitle"></p>
                        <label for="description">Description</label>
                        <textarea name="description" id="description"></textarea>
                        <p style="color:red;" id="errDescription"></p>
                        <label for="img_url">Image link</label>
                        <input type="text" name="img_url" id="img_url">
                        <p style="color:red;" id="errImage"></p>
                        <p style="color:green;" id="msgBlog"></p>
                        <button onclick="submitt('postBlog')" id="postBlog" name="postBlog">Post a new blog</button>
                    </form>
                </div>
            </div>
        </div>
    
        <?php include '../view/include/footer.html'; ?>

    <script src="../public/functions.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>