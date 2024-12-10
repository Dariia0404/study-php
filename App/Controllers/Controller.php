<?php

namespace App\Controllers;

use App\Core\Viewer;

class Controller
{
    protected array $data = [];

    public function render(string $template, array $data = [])
    {
        $viewer = new Viewer();
        $viewer->setData($data);
        $viewer->include_public_template();
    }
    public function public_view(string $part_name = 'main')   
    {

        $view = new Viewer;
        $view->setData($this->data);
        $view->include_public_template();
    }
}


