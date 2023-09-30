<?php
include '../controller/user_ctr.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Settings</title>
    <link rel="stylesheet" href="../public/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>
<body onload="startTime()">
    <?php include '../view/include/header.php'; ?> 
        <div class="profile-container-card">
            <div id="profile-main-container" class="profile-main-container">
                <div class="profile-view-container">
                    <div class="circle"><img src="<?php echo $_SESSION['pfp'];?>" alt="pfp"></div>
                    <h1><?php echo $_SESSION['username']; ?></h1>
                    <div class="edit-profile">
                        <button onclick="edit()"><p>Edit profile<i class="bi bi-pencil-square"></i></p></button>
                    </div>
                </div> 
            </div>
            <div class="edit-profile-container hidden" id="edit-profile-container">
                    <form id="editForm">
                        <label for="updateName">Change Name</label>
                        <input type="text" name="updateName" id="updateName" value="<?php echo $_SESSION['name']; ?>">
                        <p id="errUpdateName"></p>
                        <label for="updateUsername">Change Username</label>
                        <input type="text" name="updateUsername" id="updateUsername" value="<?php echo $_SESSION['username']; ?>">
                        <p id="errUpdateUsername"></p>
                        <label for="password">Change Password</label>
                        <input type="password" name="password" id="password">
                        <label for="updatePfp">Change Profile Picture</label>
                        <input type="text" name="updatePfp" id="updatePfp" value="<?php echo $_SESSION['pfp']; ?>">
                        <p id="errUpdatePfp"></p>
                        <p id="msgUpdate"></p>
                        <button onclick="submitt('editForm')" id="updateProfile" name="updateProfile">Save Changes</button>
                    </form>
                </div>
        </div>
    
    
    
        <?php include '../view/include/footer.html'; ?>

    <script src="../public/functions.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>