<?php

namespace App\Models;

class User
{
    private array $user = [
        1 => [
            'id' => 1,
            'userName' => 'John Snow',
            'email' => 'johnsnow@gmail.com',
            'password' => '1234321',
            'created_at' => '2024-11-10 10:00:00',
            'updated_at' => '2024-11-10 15:00:00',
        ],

        [
            'id' => 2,
            'userName' => 'Tom Henks',
            'email' => 'tomhenks@gmail.com',
            'password' => '112233',
            'created_at' => '2024-12-10 09:00:00',
            'updated_at' => '2024-12-10 10:00:00',
        ],

        [
            'id' => 3,
            'userName' => 'Jim Carrey',
            'email' => 'jimcarrey@gmail.com',
            'password' => '454647',
            'created_at' => '2024-12-10 10:00:00',
            'updated_at' => '2024-12-10 11:00:00',
        ],

        [
            'id' => 4,
            'userName' => 'Morgan Freeman',
            'email' => 'morganfreeman@gmail.com',
            'password' => '090807',
            'created_at' => '2024-12-10 11:00:00',
            'updated_at' => '2024-12-10 12:00:00',
        ],
    ];
    public function getAllUsers()
    {
        return $this->user;
    }


    public function getOneUser(int $id): array
    {
        if (!empty($this->User[$id])) {
            return $this->user[$id];
        }
        throw new \Exception('id is absent');
    }


    public function getUserById($id)
    {
        return ['id' => $id, 'name' => 'John Doe', 'email' => 'john@example.com'];
    }

    public function deleteUser($id)
    {
        echo 'This is User page and Delete method';
    }
}
