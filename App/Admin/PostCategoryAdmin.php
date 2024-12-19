<?php

namespace App\Admin;

use App\Models\PostCategory;

class PostCategoryAdmin
{
    public function index()
    {
        $categoryModel = new PostCategory();
        $categories = $categoryModel->getAllPostCategories();
        include __DIR__ . '/../../adminFolder/templates/postCategory/index.php';
    }

    public function create()
    {
        include __DIR__ . '/../../adminFolder/templates/postCategory/create.php';
    }

    public function update()
    {
        $categoryModel = new PostCategory();
        $category = $categoryModel->getPostCategoryById($_GET['id']);
        include __DIR__ . '/../../adminFolder/templates/postCategory/update.php';
    }
}
