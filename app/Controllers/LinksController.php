<?php
namespace App\Controllers;
use Framework\Validator;



class LinksController
{
    public function index()
    {


       view('links', ['title' => 'Proyectos', 'links' => db()->query('SELECT * FROM links ORDER BY id DESC LIMIT 6')->get()
        ]);
    }


    public function create()
    {
        $title = 'Crear Proyecto';
        view('links-create', [
            'title' => 'Registrar Proyecto'
        ]);
    }

    public function edit()
    {
        $title = 'Editar Proyecto';

        $link = db()
        ->query('SELECT * FROM links WHERE id = :id', [
            'id' => $_GET['id'] ?? null,
        ])
        ->firstOrFail();

        require __DIR__. '/../../resources/links-edit.template.php';
    }

    public function update()
    {
        $validator = new Validator($_POST, [
            'title'         => 'required|min:3|max:190',
            'url'           => 'required|url|max:190',
            'description'   => 'required|min:3|max:500',
        ]);

        $link = db()
        ->query('SELECT * FROM links WHERE id = :id', [
            'id' => $_GET['id'] ?? null,
        ])
        ->firstOrFail();

        if ($validator->passes()) {
            db()->query(
                'UPDATE links SET title = :title, url = :url, description = :description WHERE id = :id',
                [
                    'title'         => $_POST['title'],
                    'url'           => $_POST['url'],
                    'description'   => $_POST['description'],
                    'id'            => $link['id'],
                ]
            );
            redirect('/links');

        }
        $errors = $validator->errors();
        $title = 'Editar Proyecto';

        require __DIR__. '/../../resources/links-edit.template.php';
    }

    public function destroy()
    {
        db()->query('DELETE FROM links WHERE id = :id', [
            'id' => $_POST['id'] ?? null,
        ]);

        redirect('/links');

    }


    public function store()
    {
        $validator = new Validator($_POST, [
            'title'         => 'required|min:3|max:190',
            'url'           => 'required|url|max:190',
            'description'   => 'required|min:3|max:500',

        ]);

        if ($validator->passes()) {
            db()->query(
                'INSERT INTO links (title, url, description) VALUES (:title, :url, :description)',
                [
                    'title'         =>  $_POST['title'],
                    'url'           =>  $_POST['url'],
                    'description'   =>  $_POST['description'],
                ]
            );
            redirect('/links');
        } else {
            $errors = $validator->errors();
        }

        require __DIR__. '/../../resources/links-create.template.php';
    }
}


?>