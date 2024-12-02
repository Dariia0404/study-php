<?php

namespace App\Controllers;

use App\Core\Viewer;

class Gallery 
{
    public function index()
    {
        $viewer = new Viewer();
        $viewer->setData(['message' => 'Gallery']);
        $viewer->include_public_template();
    }
    public function show($id){
    include __DIR__ . '/../templates/gallery.php';
}
}
