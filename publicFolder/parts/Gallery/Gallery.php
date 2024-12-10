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
}
