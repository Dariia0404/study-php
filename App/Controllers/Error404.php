<?php

namespace App\Controllers;

use App\Core\Viewer;

class Error404 
{
    public function index()
    {
        $viewer = new Viewer();
        $viewer->setData(['message' => '404 Not Found']);
        $viewer->include_public_template();
    }
}
