<?php

namespace Src;

use PDO;

class Db
{
    public $pdo;
    
    public function __construct()
    {
        $this->pdo = new PDO('mysql:host=localhost; dbname=molotoc; charset=utf8', 'root', 'root');
    }
    
    public function select($table, $field = null, $value = null)
    {
        return $this->pdo->prepare("SELECT name, id, $field FROM $table WHERE $field = '{$value}'");
    }
}