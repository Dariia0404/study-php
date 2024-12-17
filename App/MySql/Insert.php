<?php

namespace App\MySql;

use PDO;
use Exception;

class Insert
{
    private string $tableName;
    private array $fields = ['test1', 'test2', 'test3', 'test4'];
    private array $values = [['value1', 'value2', 'value3', 'value4'], ['value1', 'value2', 'value3', 'value4']];
    private Connector $connector;
    private PDO $pdo;

    public function __construct()
    {
        $this->connector = new Connector();
        $this->pdo = $this->connector->connect();
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
                    throw new Exception('Not match the number of fields');
                }
            }
        } else {
            if (count($this->values) !== $fieldsCount) {
                throw new Exception('not match the number of fields');
            }
        }
    }

    private function get_values(): string
    {
        if (empty($this->values)) {
            throw new Exception('Invalid value');
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
        return "'" . addslashes($value) . "'"; 
    }
}
