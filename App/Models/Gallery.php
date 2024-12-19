<?php

namespace App\Models;

use App\MySql\Insert;

class Gallery
{
    private array $gallery = [];
    public int $id;
    public string $name;
    public string $category;
    public int $category_id;
    public string $created;
    public string $updated;

    
    public function __construct()
    {

    }
    
    public function getAllGallery(): array
    {
        return $this->gallery;
    }

    public function getGalleryById($id)
    {
        return ['id' => $id, 'name' => 'Nature', 'category' => 'Nature Pictures'];
    }

    public function save(array $data): void
    {
        $insert = new Insert();
        $insert->set_table_name('gallery');
        $insert->set_fieldset($data);
        $insert->execute();
    }

    public function to_array()
    {
        return get_class_vars(get_class($this));
    }

}


