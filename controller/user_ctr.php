<?php 
include '../model/user_mod.php';

$obj = new Users;

//*******************************************************This is for register*******************************************************//
if(isset($_POST['name']) && isset($_POST['username'])){
    $name = $_POST['name'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $repeatPassword= $_POST['repeatPassword'];
    $pfp = 'https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_1280.png';

    $objekts = [
        'name' => $name,
        'username' => $username,
        'password' => $password,
        'repeatPassword' => $repeatPassword,
        'pfp' => $pfp,
        'errRegister' => '',
        'errRepeat' => '',
        'errRegUsername' => '',
        'errRegName' => '',
        'errRegPassword' => '',
        'errRegPass'=> '',
        'msg' => ''
    ];

    if(empty($_POST['name'])){
        $objekts['errRegName'] = "Name field is empty!";
        }if(empty($_POST['username'])){
            $objekts['errRegUsername'] = "Username field is empty!";
        }if(empty($_POST['password'])){
            $objekts['errRegPassword'] = "Password field is empty!";
        }if(empty($_POST['repeatPassword'])){
            $objekts['errRegPass'] = "Repeat password!";
        }if($_POST['password'] !== $_POST['repeatPassword']){
            $objekts['errRepeat'] = "Passwords do not match!";
        }
    
    if(empty($objekts['errRegister'])&& empty($objekts['errRepeat']) && empty($objekts['errRegPassword']) && empty($objekts['errRegPass']) && empty($objekts['errRegName'])  && empty($objekts['errRegUsername'])){
        $objekts['msg'] = "Success!!";
        $obj->insert($name, $username, $password, $pfp);
    }

    echo json_encode($objekts);
}


//*******************************************************This is for login************************************************************//
if(isset($_POST['loginUsername']) && isset($_POST['loginPassword'])){

    $loginUsername = $_POST['loginUsername'];
    $loginPassword = $_POST['loginPassword'];

    $objektsLogin = [
        'loginUsername' => $loginUsername,
        'loginPassword' => $loginPassword,
        'errLogin' => '',
        'errUsername' => '',
        'errPassword' => '',
        'errSession' => '',
        'msgLogin' => ''
    ];


    if(empty($_POST['loginUsername'])){
        $objektsLogin['errUsername'] = "Empty username!";
    }
    if(empty($_POST['loginPassword'])){
        $objektsLogin['errPassword'] = "Empty password!";
    }

    if(empty($objektsLogin['errUsername']) && empty($objektsLogin['errPassword'])){
        $result = $obj->select($loginUsername, $loginPassword);
        if($result){
            $objektsLogin['msgLogin'] = "Success!!";
            session_start();
            $_SESSION['user_id'] = $result[0]["id"];
            $_SESSION['username'] = $result[0]["username"];
            $_SESSION['name'] = $result[0]["name"];
            $_SESSION['dateJoined'] = $result[0]["dateJoined"];
            $_SESSION['pfp'] = $result[0]["pfp"];
            if(isset($_SESSION['user_id'])){
                $objektsLogin['errSession'] = "1";
            }else{
                $objektsLogin['errSession'] = "Something went wrong, please try again!";
            }
        }else{
            $objektsLogin['msgLogin'] = "Check your username or password and try again!";
        }
        
    }
    echo json_encode($objektsLogin);
}

//*******************************************************UPDATE************************************************************//
if(isset($_POST['updateName']) && isset($_POST['updateUsername']) && isset($_POST['updatePfp'])){
    $updateUsername = $_POST['updateUsername'];
    $updateName = $_POST['updateName'];
    $updatePfp = $_POST['updatePfp'];
    session_start();
    $id = $_SESSION['user_id'];

    $updateObjekts = [
        'updateName' => $updateName,
        'updateUsername' => $updateUsername,
        'updatePfp' => $updatePfp,
        'errUpdateName' => '',
        'errUpdateUsername' => '',
        'errUpdatePfp' => '',
        'msgUpdate' => ''
    ];
// TO DO ---> FIX ERRORS  <----

    if(empty($updateObjekts['updateName']) && empty($updateObjekts['updateUsername']) && empty($updateObjekts['updatePfp'])){
        $updateObjekts['errUpdatePfp'] = "Some fields are empty!";
    } 

    if(empty($updateObjekts['errUpdateName']) && empty($updateObjekts['errUpdateUsername']) && empty($updateObjekts['errUpdatePfp'])){
        $update = $obj->update($updateName, $updateUsername, $updatePfp, $id);
        $updateObjekts['msgUpdate'] = "success";
    }


    echo json_encode($updateObjekts);
}


//*******************************************************ADD NEW BLOG************************************************************//
if(isset($_POST['title']) && isset($_POST['description']) && isset($_POST['img_url'])){
    $title = $_POST['title'];
    $description = $_POST['description'];
    $img_url = $_POST['img_url'];
    session_start();
    $username = $_SESSION['username'];

    $blogObjekts = [
        'title' => $title,
        'description' => $description,
        'img_url' => $img_url,
        'errTitle' => '',
        'errDescription' => '',
        'errImage' => '',
        'msgBlog' => ''
    ];

    if(empty($_POST['title'])){
        $blogObjekts['errTitle'] = "Your blog need's a title!";
    }
    if(empty($_POST['description'])){
        $blogObjekts['errDescription'] = "Blog need's a description!";
    }
    if(empty($_POST['img_url'])){
        $blogObjekts['errImage'] = "Blog need's an image!";
    }

    if(empty($blogObjekts['errTitle']) && empty($blogObjekts['errDescription']) && empty($blogObjekts['errImage'])){
        $insertBlog = $obj->insertBlog($title, $description, $img_url, $username);
        $blogObjekts['msgBlog'] = "Blog has been posted successfully!";
    }


    echo json_encode($blogObjekts);

}

//*******************************************************COMMENTS************************************************************//
if(isset($_POST['commentar'])){
    $comment = $_POST['commentar'];
    session_start();
    $user_id = $_SESSION['user_id'];
    $blog_id = $_POST['blog_id'];


$commentObjekts = [
    'comment' => $comment,
    'user_id' => $user_id,
    'blog_id' => $blog_id,
    'errComment' => '',
    'msgComment' => ''
];

if(empty($comment)){
    $commentObjekts['errComment'] = "Please enter comment!";
}

if(empty($commentObjekts['errComment'])){
    $insertComment = $obj->insertComment($comment, $user_id, $blog_id);
    $commentObjekts['msgComment'] = "Your comment has been posted succesfully!";
}

echo json_encode($commentObjekts);

}

?>