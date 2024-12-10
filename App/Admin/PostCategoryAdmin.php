<?php

namespace App\Admin;

use App\Models\PostCategory;

class PostCategoryAdmin
{
    public function index()
    {
        $categoryModel = new PostCategory();
        $categories = $categoryModel->getAllCategories();
        include __DIR__ . '/../../adminFolder/templates/postCategory/index.php';
    }

    public function create()
    {
        include __DIR__ . '/../../adminFolder/templates/postCategory/create.php';
    }

    public function update()
    {
        $categoryModel = new PostCategory();
        $category = $categoryModel->getCategoryById($_GET['id']);
        include __DIR__ . '/../../adminFolder/templates/postCategory/update.php';
    }

    public function delete()
    {
        $categoryModel = new PostCategory();
        $categoryModel->deleteCategory($_GET['id']);
        header('Location: /admin/postCategory');
    }
}
