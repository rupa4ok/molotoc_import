<?php

require_once '../local/vendor/autoload.php';
require_once 'source/config.php';

/**
 * @global CMain $APPLICATION
 * @global CUser $USER
 */

use Src\Db;
use Src\ExcelReader;
use Src\ExcelRepository;
use Src\Import;

//Подключение к бд
$pdo = new Db();
//парсинг csv
$excel = new ExcelReader($filename);
//получение данных
$data = new ExcelRepository($excel);
//импорт в свойства
$import = new Import($config);

foreach ($data->getData() as $url => $releated) {
    $parentId = $import->getId($url);
    echo $parentId. '<br>';
    foreach ($releated as $item) {
        $releatedId = $import->getId($item);
        echo $releatedId . '<br>';
    }
}

$user = new CUser();

//echo '<pre>';
//print_r($data->getData());
//echo '</pre>';