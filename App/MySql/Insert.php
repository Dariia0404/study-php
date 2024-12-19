<?php

namespace App\MySql;

use App\MySql\Connector;
use PDO;

class Insert
{
    private string $tableName;
    private array $fields = [];
    private array $values = [];
    private PDO $connect;

    public function __construct()
    {
        $this->connect = (new Connector())->connect();
    }

    public function set_table_name(string $table_name): void
    {
        $this->tableName = $table_name;
    }

    public function set_fieldset(array $fieldset): void
    {
        $this->fields = $fieldset;
    }

    public function set_values(array $values): void
    {
        $this->values = $values;
    }

    public function buildSql(): string
    {
        $this->validate_fields_values();
        return 'INSERT INTO ' . $this->tableName . ' (' . implode(', ', $this->fields) . ') VALUES ' . $this->get_values();
    }

    public function execute()
    {
        $this->connect->query($this->buildSql());
    }

    private function check_floors(): bool
    {
        return is_array($this->values[0]);
    }

    private function validate_fields_values(): void
{
    $fieldsCount = count($this->fields);
    
    if ($this->check_floors()) {
        foreach ($this->values as $value) {
            if (count($value) !== $fieldsCount) {
                throw new \Exception('Not match for the current model');
            }
        }
    } else {
        if (count($this->values) !== $fieldsCount) {
            throw new \Exception('Fields count does not match');
        }
    }
}

    private function get_values(): string
    {
        if (empty($this->values)) {
            throw new \Exception('Invalid value');
        }

        $result = [];

        if ($this->check_floors()) {
            foreach ($this->values as $value) {
                $result[] = '(' . implode(',', array_map([$this, 'escape_value'], $value)) . ')';
            }
        } else {
            $result[] = '(' . implode(',', array_map([$this, 'escape_value'], $this->values)) . ')';
        }

        return implode(', ', $result);
    }

    private function escape_value($value): string
    {
        if (is_null($value)) {
            return "NULL";
        } elseif (is_numeric($value)) {
            return $value;
        } else {
            return "'" . addslashes($value) . "'"; 
        }
    }
    
}
