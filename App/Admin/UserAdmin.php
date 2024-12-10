<?php

namespace App\Admin;

use App\Models\User;

class UserAdmin
{
    public function index()
    {
        $userModel = new User();
        $users = $userModel->getAllUsers();
        include __DIR__ . '/../../adminFolder/templates/user/index.php';
    }

    public function create()
    {
        include __DIR__ . '/../../adminFolder/templates/user/create.php';
    }

    public function update()
    {
        $userModel = new User();
        $user = $userModel->getUserById($_GET['id']);
        include __DIR__ . '/../../adminFolder/templates/user/update.php';
    }

    public function delete()
    {
        $userModel = new User();
        $userModel->deleteUser($_GET['id']);
        header('Location: /admin/user');
    }
}
