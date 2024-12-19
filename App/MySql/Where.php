<?php 

namespace App\MySql;

class Where
{
    private array $conditions = [];

    public function addCondition(string $field, string $operator, $value): void
{
    if (is_null($value)) {
        $value = 'NULL';
    } 
    elseif (is_numeric($value)) {
    } 
    else {
        $value = "'" . addslashes($value) . "'";
    }

    $this->conditions[] = "$field $operator $value";
}

public function getSql(): string
{
    if (empty($this->conditions)) {
        return ''; 
    }

    return 'WHERE ' . implode(' ', $this->conditions);
}
}
