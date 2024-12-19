<?php

namespace App\MySql;

use App\MySql\Connector;
use PDO;

class Delete
{
    private string $tableName;
    private array $fields = [];
    private array $values = [];
    private $where;
    private PDO $connect;

    public function __construct()
    {
        $this->connect = (new Connector())->connect();
    }

    public function set_table_name(string $table_name): void
    {
        $this->tableName = $table_name;
    }

    public function buildSql(): string
{
    if (empty($this->fields) || empty($this->get_values())) {
        throw new \Exception("Fields or values are empty.");
    }
    return 'INSERT INTO ' . $this->tableName . ' (' . implode(', ', $this->fields) . ') VALUES ' . $this->get_values();
}

private function get_values(): string
{
    if (empty($this->values)) {
        throw new \Exception('Invalid value');
    }
    return '(' . implode(',', array_map([$this, 'escape_value'], $this->values)) . ')';
}


    public function execute()
    {
        $this->connect->query($this->buildSql());
    }
}
   