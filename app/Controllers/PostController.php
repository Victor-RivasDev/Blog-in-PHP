<?php
namespace App\Controllers;


class PostController
{
    public function index()
    {


        $post = db()->query('SELECT * FROM posts WHERE id = :id', [
            'id' => $_GET['id'] ?? null,
        ])->firstOrFail();



        view('post', [
            'title' => 'Proyector', 
            'post' => $post]);
    }
}


?>