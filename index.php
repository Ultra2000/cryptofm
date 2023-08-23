<?php
require_once('src/model.php');
require_once('src/controller/homepage.php');
require_once('src/controller/post.php');

if(isset($_GET['action']) && ($_GET['action']) !== '')
{
    if($_GET['action'] === 'post'){
        if(isset($_GET['id']) && $_GET['id'] > 0)
        {
            $id = $_GET['id'];
            post($id);
        }
    }
}else{
    homepage();
}