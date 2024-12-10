<?php

namespace App\Controllers\ControllerAdmin;

use App\Models\Gallery;

class GalleryAdmin
{
    public function index()
    {
        $galleryModel = new Gallery();
        $galleries = $galleryModel->getAllGallery();
        include __DIR__ . '/../../adminFolder/templates/gallery/index.php';
    }

    public function create()
    {
        include __DIR__ . '/../../adminFolder/templates/gallery/create.php';
    }

    public function update()
    {
        $galleryModel = new Gallery();
        $gallery = $galleryModel->getGalleryById($_GET['id']);
        include __DIR__ . '/../../adminFolder/templates/gallery/update.php';
    }

    public function delete()
    {
        $galleryModel = new Gallery();
        $galleryModel->deleteGallery($_GET['id']);
        header('Location: /admin/gallery');
    }
}
