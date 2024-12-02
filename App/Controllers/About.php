<?php

namespace App\Controllers;

use App\Core\Viewer;

class About
{ 
    public function index()
    {
        $viewer = new Viewer();
        $viewer->setData(['message' => 'About Us']);
        $viewer->include_public_template();
    }

    public function show($id){
        include __DIR__ . '/../templates/about.php';
}
}