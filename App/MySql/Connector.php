<?php

namespace App\MySql;

use PDO;
use Exception;

class Connector
{
    private array $config = [];
    private PDO $pdo;

    public function __construct()
    {
        $this->init_config();
        $this->db_connect();
    }

    private function init_config(): void
    {
        $this->config = require __DIR__ .'/../config/db_cred.php';
    }

    private function getDns(): string
    {
        if (empty($this->config['driver']) || empty($this->config['host']) || empty($this->config['dbname'])) {
            throw new Exception('Missing or incorrect DNS data');
        }
        return $this->config['driver'] . ':host=' . $this->config['host'] . ';dbname=' . $this->config['dbname'];
    }

    private function db_connect(): void
    {
        if (empty($this->config['user']) || empty($this->config['pass'])) {
            throw new Exception('Empty user or password');
        }
        $this->pdo = new PDO($this->getDns(), $this->config['user'], $this->config['pass']);
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function connect(): PDO
    {
        return $this->pdo;
    }
}
