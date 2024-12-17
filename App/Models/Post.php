<?php

namespace App\Models;

use App\MySql\Connector;
use App\MySql\Insert;

class Post
{
    private array $post = [
        1 => [
            'id' => 1,
            'title' => 'Nature',
            'content' => 'This is the content about nature.',
            'user-id' => 1,
            'created_at' => '2024-11-10 10:00:00',
            'updated_at' => '2024-11-10 15:00:00',
        ],

        [
            'id' => 2,
            'title' => 'Technology',
            'content' => 'This is the content about technology.',
            'user_id' => 2,
            'created_at' => '2024-12-10 09:00:00',
            'updated_at' => '2024-12-10 10:00:00',

        ],

        [
            'id' => 3,
            'title' => 'Health',
            'content' => 'This is the content about health.',
            'user_id' => 3,
            'created_at' => '2024-12-10 10:00:00',
            'updated_at' => '2024-12-10 11:00:00',
        ],

        [
            'id' => 4,
            'title' => 'Films',
            'content' => 'This is the content about films.',
            'user_id' => 4,
            'created_at' => '2024-12-10 11:00:00',
            'updated_at' => '2024-12-10 12:00:00',
        ],
    ];

    public function __construct()
    {
        $insert = new Insert();
        $insert->set_table_name('post');
        var_dump($insert->buildSql());

    }
    public function getAllPosts()
    {
        return $this->post;
    }

    public function getOnePost(int $id): array
    {
        if (!empty($this->post[$id])){
        return $this->post[$id];
    }
    throw new \Exception('id is absent');
    }

    public function getPostById($id)
    {

        return ['id' => $id, 'title' => 'Post 1', 'content' => 'Content for post 1'];
    }

    public function deletePost($id)
    {
        echo 'This is Post page and Delete method';
    }
}
