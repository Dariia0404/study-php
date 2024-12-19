<?php

namespace App\Controllers\ControllerAdmin;

use App\Models\Post;

class PostAdmin extends Post
{
    public function index()
    {
        $postModel = new PostAdmin();
        $posts = $postModel->getAllPosts();
        include __DIR__ . '/../../adminFolder/templates/post/index.php';
    }

    public function create(): void
    {
        if(!empty($_POST))
        {
            $postModel = new PostAdmin();
            $postModel->save(array_intersect_key(array_filter($_POST), $postModel->to_array()));
        }
        include __DIR__ . '/../../adminFolder/templates/post/create.php';
    }

    public function update()
    {
        $postModel = new PostAdmin();
        $post = $postModel->getPostById($_GET['id']);
        include __DIR__ . '/../../adminFolder/templates/post/update.php';
    }

    public function delete()
    {
        $postModel = new PostAdmin();
        $this->data=['data'=> $postModel->getPostById($_GET['id'])];
        include __DIR__ . '/../../adminFolder/templates/post/delete.php';
    }
        
    }
