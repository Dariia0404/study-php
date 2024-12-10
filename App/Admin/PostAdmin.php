<?php

namespace App\Controllers\ControllerAdmin;

use App\Models\Post;

class PostAdmin
{
    public function index()
    {
        $postModel = new Post();
        $posts = $postModel->getAllPosts();
        include __DIR__ . '/../../adminFolder/templates/post/index.php';
    }

    public function create()
    {
        include __DIR__ . '/../../adminFolder/templates/post/create.php';
    }

    public function update()
    {
        $postModel = new Post();
        $post = $postModel->getPostById($_GET['id']);
        include __DIR__ . '/../../adminFolder/templates/post/update.php';
    }

    public function delete()
    {
        $postModel = new Post();
        $postModel->deletePost($_GET['id']);
        header('Location: /admin/post');
    }
}
