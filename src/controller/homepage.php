<?php

require_once 'src/model.php';

function homepage()
{
    $posts = getArticles();

    include 'templates/homepage.php';
}



