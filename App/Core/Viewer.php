<?php

namespace App\Core;

class Viewer
{
    private array $data = [];

    public function include_public_template(): void
    {
        extract($this->data, EXTR_SKIP);
        include __DIR__ . '/../../publicFolder/templates/template_public.php'; 
        include __DIR__ . '/../../publicFolder/parts/main.php'; 
        include __DIR__ . '/../../publicFolder/parts/footer.php'; 
    }

    public function include_public_admin(): void
    {
        include __DIR__ . '/../../adminFolder/templates/template_admin.php';
    }

    public function setData(array $data): void
    {
        $this->data = $data;
    }

}
