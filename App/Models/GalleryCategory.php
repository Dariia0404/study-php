<?php

namespace App\Models;

class GalleryCategory
{
    private array $galleryCategory = [
        1 => [
            'id' => 1,
            'name' => 'Mona Lisa',
            'description' => 'Mona Lisa By Leonardo Da Vinci. Leonardo Mona Lisa is one of the most famous paintings in the world.',
            'created_at' => '2024-11-10 10:00:00',
            'updated_at' => '2024-11-10 15:00:00',
        ],

        [
            'id' => 2,
            'name' => 'Starry Night',
            'description' => 'Starry Night over the Rhône, Vincent van Gogh.',
            'created_at' => '2024-12-10 09:00:00',
            'updated_at' => '2024-12-10 10:00:00',
        ],

        [
            'id' => 3,
            'name' => 'American Gothic',
            'description' => 'The American Gothic is one of those paintings that you seen a million times without paying much attention to it.',
            'created_at' => '2024-12-10 10:00:00',
            'updated_at' => '2024-12-10 11:00:00',
        ],

        [
            'id' => 4,
            'name' => 'Water Lilies',
            'description' => 'Water Lilies Series. Monet was obsessed with his garden and the changing light.',
            'created_at' => '2024-12-10 11:00:00',
            'updated_at' => '2024-12-10 12:00:00',
        ],
    ];
    public function getAllCategories()
    {
        return $this->galleryCategory;
    }

    public function getOneGalleryCategory(int $id): array
    {
        if (!empty($this->galleryCategory[$id])){
        return $this->galleryCategory[$id];
    }
    throw new \Exception('id is absent');
    }

    public function getCategoryById($id)
    {
        return ['id' => $id, 'name' => 'Nature'];
    }

    public function deleteCategory($id)
    {
        echo 'This is GalleryCategory page and Delete method';
    }
}
