<?php

namespace App\Admin;

use App\Models\GalleryCategory;

class GalleryCategoryAdmin
{
    public function index()
    {
        $categoryModel = new GalleryCategory();
        $categories = $categoryModel->getAllCategories();
        include __DIR__ . '/../../adminFolder/templates/galleryCategory/index.php';
    }

    public function create()
    {
        include __DIR__ . '/../../adminFolder/templates/galleryCategory/create.php';
    }

    public function update()
    {
        $categoryModel = new GalleryCategory();
        $category = $categoryModel->getCategoryById($_GET['id']);
        include __DIR__ . '/../../adminFolder/templates/galleryCategory/update.php';
    }

    public function delete()
    {
        $categoryModel = new GalleryCategory();
        $categoryModel->deleteCategory($_GET['id']);
        header('Location: /admin/galleryCategory');
    }
}
