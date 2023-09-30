<?php
include '../libraries/db.php';
class Blog
{
    private $obj;

    function __construct()
    {
        $this->obj = new DB;
    }
    function select()
    {
        $result = $this->obj->select('SELECT * FROM blogs ORDER BY id DESC');
        return $result;
    }

    function selectSingle($id)
    {
        $singleView = $this->obj->selectOne('SELECT * FROM blogs WHERE id =' . $id);
        return $singleView;
    }

    function selectComment()
    {
        $commentView = $this->obj->select('SELECT * FROM comments');
        return $commentView;
    }
}
?>
