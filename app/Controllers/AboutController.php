<?php

class AboutController
{
    public function index()
    {
        $title = "Sobre mi";

        require __DIR__. '/../../resources/about.template.php';
    }
}

?>