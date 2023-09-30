<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../public/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>
<body>
    <div class="background-img" id="background-img">
        <div class="login-card-container">
            <div class="login-card-left">
                <div class="login-card-icon">
                    <a href="index.php"><img src="../view/include/icon.png" alt="icon"></a>
                </div>
            </div>
            <div class="login-card-right">
                <h1>Login into kikd.lv</h1>
                <div class="login-form">
                    <form id="loginForm">
                        <input type="text" name="loginUsername" id="loginUsername" placeholder="Enter username">
                        <p id="errUsername"></p>
                        <input type="password" name="loginPassword" id="loginPassword" placeholder="Enter password">
                        <p id="errPassword"></p>
                        <button onclick="submitt('loginForm')" name="loginSubmit" id="loginSubmit">Log In</button>
                        <p id="errLogin"></p>
                        <p id="msgLogin"></p>
                    </form>
                </div>
                <div class="login-card-footer">
                    <p>Don't have an account? <button onclick="register()">Click here to create </button> your account!</p><!--Fix the html to php-->
                </div>
            </div>
        </div>
    </div>  
    <div class="register-img hidden" id="register-img">
        <div class="register-card-container">
            <div class="login-card-left">
                <div class="login-card-icon">
                <a href="index.php"><img src="../view/include/icon.png" alt="icon"></a>
                </div>
            </div>
            <div class="login-card-right">
                <h1>Create a new Profile for kikd.lv</h1>
                <div class="login-form">
                    <form id="form">
                        <input type="text" name="name" id="name" placeholder="Enter Your name">
                        <p id="errRegName"></p>
                        <input type="text" name="username" id="username" placeholder="Enter username">
                        <p id="errRegUsername"></p>
                        <input type="password" name="password" id="password" placeholder="Enter password">
                        <p id="errRegPassword"></p>
                        <input type="password" name="repeatPassword" id="repeatPassword" placeholder="Repeat password">
                        <p id="errRegPass"></p>
                        <p id="errRepeat"></p>
                        <button onclick="submitt('form')" name="submit" id="submit">Register</button>
                        <p id="errRegister"></p>
                        <p id="msg"></p>
                    </form>
                </div>
                <div class="login-card-footer">
                    <p>Already have an account? <button onclick="register()">Click here to login </button> into your account!</p><!--Fix the html to php-->
                </div>
            </div>
        </div>
    </div>

    <?php include '../view/include/footer.html'; ?>

    <script src="../public/functions.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</body>
</html>