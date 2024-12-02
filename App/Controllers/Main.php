<?php

namespace App\Controllers;

use App\Core\Viewer;

class Main 
{
    public function index()
    {
        $viewer = new Viewer();
        $viewer->setData(['message' => 'Welcome to the main page!']);
        $viewer->include_public_template();
    }

    public function show($id){
        include __DIR__ . '/../templates/main.php';
}
}

