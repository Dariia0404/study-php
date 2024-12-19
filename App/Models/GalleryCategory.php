<?php

namespace App\Models;

use App\MySql\Insert;

class GalleryCategory
{
    private array $galleryCategory = [];
    public int $id;
    public string $name;
    public string $description;
    public string $created;
    public string $updated;
    
        
    public function __construct()
    {

    }
    public function getAllGalleryCategories()
    {
        return $this->galleryCategory;
    }

    public function getGalleryCategoryById($id)
    {
        return ['id' => $id, 'name' => 'Category 1', 'description' => 'Text'];
    }

    public function save(array $data): void
    {
        $insert = new Insert();
        $insert->set_table_name('galleryCategory');
        $insert->set_fieldset($data);
        $insert->execute();
    }

    public function to_array()
    {
        return get_class_vars(get_class($this));
    }

  
}