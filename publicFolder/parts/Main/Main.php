<?php

namespace App\Controllers;

use App\Core\Viewer;

class Main extends Controller
{
    public function view()
    {
        $this->public_view('parts/main');
    }

    public function index()
    {
        $viewer = new Viewer();
        $viewer->setData(['message' => 'Welcome to the Main Page']);
        $viewer->include_public_template();
    }
}
