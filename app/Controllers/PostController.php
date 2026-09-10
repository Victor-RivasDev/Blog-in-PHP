<?php

class PostController
{
    public function index()
    {
        $title = 'Publicaciones';
        $db = new Database();

        $posts = $db
        ->query('SELECT * FROM posts ORDER BY id DESC LIMIT 6')
        ->get();


        require __DIR__. '/../../resources/post.template.php';
    }
}


?>