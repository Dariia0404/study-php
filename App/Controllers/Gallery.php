<?php

namespace App\Controllers;

use App\Models\Gallery as GalleryModel;

class Gallery extends Controller
{
    public function view()
    {
    $model = new GalleryModel();
    $this->data = ['data' => $model->getAllGallery()];
    $this->public_view('Gallery/gallery-main');
    }
    public function create()
    {
        echo 'This is Gallery page and Create method';
    }

    public function update()
    {
        $model = new GalleryModel();
        $this->data=['data'=> $model->getOneGallery($_GET['id'])];
        $this->public_view('Gallery/gallery-main');
    }

    public function delete()
    {
        echo 'This is Gallery page and Delete method';
    }
}

