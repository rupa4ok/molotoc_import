<?php

namespace App\Src;

class ExcelRepository
{
    public $file;
    
    public function __construct($file)
    {
        $this->file = $file;
    }
    
    public function getLines()
    {
        return $this->file->csv->data;
    }
    
    public function getData()
    {
        $exelData = [];
        foreach ($this->getLines() as $k => $item) {
            $url = $this->getId('URL раздела', $item);
            $id = $this->getId('Сопутствующие', $item, ';');
            foreach ($id as $v => $value) {
                if ($value) {
                    $releated = $this->getId($v, $id);
                    $exelData[] = [
                        'url' => $url[4],
                        'url_releated' => $releated[4]
                    ];
                }
            }
        }
        return $exelData;
    }
    
    public function getId($title, $item, $delimiter = '/')
    {
        return explode($delimiter, $item[$title]);
    }
    
}