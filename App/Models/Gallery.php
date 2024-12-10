<?php

namespace App\Models;
class Gallery
{
    private array $gallery = [
        1 => [
            'id' => 1,
            'name' => 'Mona Lisa',
            'category' => 'Portrait',
            'category_id' => 1,
            'created_at' => '2024-11-10 10:00:00',
            'updated_at' => '2024-11-10 15:00:00',
        ],

        [
            'id' => 2,
            'name' => 'Starry Night',
            'category' => 'Post-Impressionism',
            'category_id' => 2,
            'created_at' => '2024-12-10 09:00:00',
            'updated_at' => '2024-12-10 10:00:00',
        ],

        [
            'id' => 3,
            'name' => 'American Gothic',
            'category' => 'Horrors',
            'category_id' => 3,
            'created_at' => '2024-12-10 10:00:00',
            'updated_at' => '2024-12-10 11:00:00',
        ],

        [
            'id' => 4,
            'name' => 'Water Lilies',
            'category' => 'Nymphaea',
            'category_id' => 4,
            'created_at' => '2024-12-10 11:00:00',
            'updated_at' => '2024-12-10 12:00:00',
        ],
    ];

    public function getAllGallery(): array
    {
        return $this->gallery;
    }

    public function getOneGallery(int $id): array
    {
        if (!empty($this->gallery[$id])){
        return $this->gallery[$id];
    }
    throw new \Exception('id is absent');
    }

    public function getGalleryById($id)
    {
        return ['id' => $id, 'name' => 'Nature'];
    }

    public function deleteGallery($id)
    {
        echo 'This is Gallery page and Delete method';
    }

}


    

