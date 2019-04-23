<?php

namespace App\Src;

class QueryBilder
{
    private $db;
    
    public function __construct()
    {
        $this->db = new Db();
    }
    
}