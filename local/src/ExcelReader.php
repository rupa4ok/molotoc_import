<?php

namespace Src;

use ParseCsv\Csv;

class ExcelReader
{
    protected $filename;
    public $csv;
    
    public function __construct($filename)
    {
        $this->filename = '../app/source/' . $filename;
        $this->csv = new Csv($this->filename);
    }
    
    public function getData()
    {
        return $this->csv->data;
    }
}