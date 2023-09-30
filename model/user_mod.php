<?php
include '../libraries/db.php';
class Users
{
    private $obj;

    function __construct()
    {
        $this->obj = new DB;
    }
    function select($loginUsername, $loginPassword)
    {
        $hashedPasswordResult = $this->obj->select("SELECT `password` FROM blogUsers WHERE `username` ='$loginUsername'");
        if(empty($hashedPasswordResult)){
            return false;
        }
        $hashedPassword = $hashedPasswordResult[0]['password'];
        $verifyPassword = password_verify($loginPassword, $hashedPassword);
        if ($verifyPassword) {
            $result = $this->obj->select("SELECT * FROM blogUsers WHERE username='$loginUsername'");
            return $result;
        } else {
            return false;
        }
    }
    function insert($name, $username, $password, $pfp)
    {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $register = $this->obj->insert("INSERT INTO blogUsers (`name`, `username`, `password`, `pfp`) VALUES ('$name', '$username', '$hashedPassword', '$pfp')");
        return $register;
    }
    function update($updateName, $updateUsername, $updatePfp, $id)
    {
        $update = $this->obj->insert("UPDATE blogUsers SET `name` = '$updateName', `username` = '$updateUsername', `pfp` = '$updatePfp' WHERE `id` = '$id'");
        return $update;
    }
    function insertBlog($title, $description, $img_url, $username)
    {
        $insertBlog = $this->obj->insert("INSERT INTO blogs (`head`, `desc`, `img_url`, `username`) VALUES ('$title', '$description', '$img_url', '$username')");
        return $insertBlog;
    }
    function insertComment($comment, $user_id, $blog_id)
    {
        $insertComment = $this->obj->insert("INSERT INTO comments (`blog_id`, `user_id`, `comment`) VALUES ('$blog_id', '$user_id', '$comment')");
        return $insertComment;
    }

}

?>