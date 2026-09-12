<?php
namespace App\Controllers;


class PostController
{
    public function index()
    {


        $posts = db()->query('SELECT * FROM posts WHERE id = :id', [
            'id' => $_GET['id'] ?? null,
        ])->firstOrFail();



        view('post', [
            'title' => 'Proyector', 
            'posts' => $posts]);
    }
}


?>