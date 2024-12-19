<?php

namespace App\Models;

use App\MySql\Insert;

class Post 
{
    private array $post = [];
    public int $id;
    public string $title;
    public string $content;
    public int $user_id;
    public string $created;
    public string $updated;



    public function __construct()
    {
        
    }
    public function getAllPosts()
    {
        return $this->post;
    }
    public function getPostById($id)
    {

        return ['id' => $id, 'title' => 'Post 1', 'content' => 'Content for post 1'];
    }

    public function save(array $data): void
    {
        $insert = new Insert();
        $insert->set_table_name('post');
        $insert->set_fieldset($data);
        $insert->execute();
    }

    public function to_array()
    {
        return get_class_vars(get_class($this));
    }
}
