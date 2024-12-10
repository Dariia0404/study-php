<?php

namespace App\Controllers;

use App\Core\Viewer;

class About extends Controller
{
    public function view()
    {
        $this->public_view('parts/about');
    }

    public function index()
    {
        $viewer = new Viewer();
        $viewer->setData(['message' => 'About Us']);
        $viewer->include_public_template();
    }
}
