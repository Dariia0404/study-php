<?php

namespace App\Admin;

use App\Models\GalleryCategory;

class GalleryCategoryAdmin
{
    public function index()
    {
        $categoryModel = new GalleryCategory();
        $categories = $categoryModel->getAllGalleryCategories();
        include __DIR__ . '/../../adminFolder/templates/galleryCategory/index.php';
    }

    public function create()
    {
        include __DIR__ . '/../../adminFolder/templates/galleryCategory/create.php';
    }

    public function update()
    {
        $categoryModel = new GalleryCategory();
        $category = $categoryModel->getGalleryCategoryById($_GET['id']);
        include __DIR__ . '/../../adminFolder/templates/galleryCategory/update.php';
    }
}
