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
        $viewer->setData(['message' => 'Main']);
        $viewer->include_public_template();
    }
    public function create()
    {
        echo 'This is Main page and Create method';
    }

    public function update()
    {
        echo 'This is Main page and Update method';
    }

    public function delete()
    {
        echo 'This is Main page and Delete method';
    }
}