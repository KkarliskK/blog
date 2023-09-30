<?php
include '../controller/user_ctr.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile | kikd.lv</title>
    <link rel="stylesheet" href="../public/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>
<body onload="startTime()">
    <?php include '../view/include/header.php'; ?> 
        <div class="profile-container-card">
            <div class="profile-main-container" id="profile-main-container">
                <div class="profile-view-container">
                    <div class="circle"><img src="<?php echo $_SESSION['pfp'];?>" alt="pfp"></div>
                    <h1><?php echo $_SESSION['username']; ?></h1>
                </div> 
                <div class="profile-menu">
                    <p>Joined on: <?php echo $_SESSION['dateJoined']; ?></p> <!--Need to put date here when profile got created-->
                    <p>Blog count: 0</p><!--If will work then blog counter-->
                    <p>Liked Blogs: 0</p> <!--Same with like counter-->
                </div>
            </div>
        </div>
    
        <?php include '../view/include/footer.html'; ?>

    <script src="../public/functions.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</body>
</html>