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
        $viewer->setData(['message' => 'about']);
        $viewer->include_public_template();
    }
    public function create()
    {
        echo 'This is About page and Create method';
    }

    public function update()
    {
        echo 'This is About page and Update method';
    }

    public function delete()
    {
        echo 'This is About page and Delete method';
    }
}