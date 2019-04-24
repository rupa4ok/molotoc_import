<?php

namespace Src;

class QueryBilder
{
    private $db;
    
    public function __construct()
    {
        $this->db = new Db();
    }
}