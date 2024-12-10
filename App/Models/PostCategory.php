<?php

namespace App\Models;

class PostCategory
{
    private array $postCategory = [
        1 => [
            'id' => 1,
            'name' => 'Nature',
            'description' => 'The beauty of nature lies in its freshness, openness, slow breeze and the warm sun – relief for our brains',
            'created_at' => '2024-11-10 10:00:00',
            'updated_at' => '2024-11-10 15:00:00',
        ],

        [
            'id' => 2,
            'name' => 'Technology',
            'description' => 'Technology is the application of conceptual knowledge to achieve practical goals, especially in a reproducible way.',
            'created_at' => '2024-12-10 09:00:00',
            'updated_at' => '2024-12-10 10:00:00',
        ],

        [
            'id' => 3,
            'name' => 'Health',
            'description' => 'Health is a state of complete physical, mental and social well-being and not merely the absence of disease or infirmity.',
            'created_at' => '2024-12-10 10:00:00',
            'updated_at' => '2024-12-10 11:00:00',
        ],

        [
            'id' => 4,
            'name' => 'Films',
            'description' => 'When the cinematography, editing, writing, sound, music, acting and direction come together, there is the potential for the film to be great.',
            'created_at' => '2024-12-10 11:00:00',
            'updated_at' => '2024-12-10 12:00:00',
        ],
    ];
    public function getAllCategories()
    {
        return $this->postCategory;
    }

    public function getOnePostCategory(int $id): array
    {
        if (!empty($this->PostCategory[$id])){
        return $this->postCategory[$id];
    }
    throw new \Exception('id is absent');
    }

    public function getCategoryById($id)
    {
        return ['id' => $id, 'name' => 'Category 1'];
    }

    public function deleteCategory($id)
    {
        echo 'This is PostCategory page and Delete method';
    }
}
