<?php

namespace App\Models;

use App\MySql\Insert;

class User
{
    private array $user = [];
    public int $id;
    public string $userName;
    public string $email;
    public int $password;
    public string $created;
    public string $updated;

    public function __construct()
    {

    }

    public function getAllUsers()
    {
        return $this->user;
    }

    public function getUserById($id)
    {
        return ['id' => $id, 'name' => 'John Snow', 'email' => 'johnsnow@email.com'];
    }
    public function save(array $data): void
    {
        $insert = new Insert();
        $insert->set_table_name('user');
        $insert->set_fieldset($data);
        $insert->execute();
    }

    public function to_array()
    {
        return get_class_vars(get_class($this));
    }
}


