<?php

function getArticles()
{
    $database = dbConnect();
    $statement = $database->query("SELECT id, titles, content, images, date_creation FROM articles ORDER BY id DESC LIMIT 5");
    $statement->execute();
    $posts = [];

    while (($row = $statement->fetch(PDO::FETCH_ASSOC)))
    {
        $post = [
            'titles' => $row['titles'],
            'content' => $row['content'],
            'images' => $row['images'],
            'date_creation' => $row['date_creation'],
            'id' => $row['id'],
        ];

        $posts[] = $post;
    }
    return $posts;
}


function getPost($id)
{
    $database = dbConnect();
    $statement = $database->prepare("SELECT id, titles, content, images, date_creation FROM articles WHERE id = ?");
    $statement->execute([$id]);

    $row = $statement->fetch();

    $post = [
        'titles' => $row['titles'],
        'content' => $row['content'],
        'images' => $row['images'],
        'date_creation' => $row['date_creation'],
        'id' => $row['id'],
    ];
    return $post;
}

function dbConnect() {
	try{
		$database = new PDO('mysql:host=localhost;dbname=art-crypto;charset=utf8', 'root', '');		
		return $database;
	} catch(Exception $e) {
		die('Erreur: '.$e->getMessage());
	}
}