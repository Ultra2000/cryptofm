<?php

require_once('src/model.php');

function post(string $id)
{
    $post = getPost($id);

    include 'templates/post.php';
}


