<?php

namespace Src;

use PDO;

class Import
{
    public $name;
    public $id;
    public $code;
    private $db;
    private $table;
    
    public function __construct($config)
    {
        $this->db = new Db();
        $this->table = $config['table'];
    }
    
    public function getId($value)
    {
        return $this->getDataByAlias($value)[0]['id'];
    }
    
    public function getName()
    {
    
    }
    
    public function getDataByAlias($url)
    {
        $statment = $this->db->select($this->table, 'CODE', $url);
        $statment->execute();
        return $statment->fetchAll(PDO::FETCH_ASSOC);
    }
}