<?php

use App\Src\Db;
use App\Src\ExcelReader;
use App\Src\ExcelRepository;
use App\Src\Import;

require_once '../vendor/autoload.php';

$filename = '1.csv';

//Подключение к бд
$pdo = new Db();
//парсинг csv
$excel = new ExcelReader($filename);
//получение данных
$data = new ExcelRepository($excel);
//импорт в свойства
$import = new Import();

foreach ($data->getData() as $value) {
    $import->setData($value);
}

$statment = $pdo->prepare('SHOW TABLES');
$statment->execute();
$result = $statment->fetchAll(PDO::FETCH_ASSOC);