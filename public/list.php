<?php 

// Инициализируем наше приложение
require (__DIR__ . '/../bootstrap.php');

$data = new tableDataGateway;

$pdo = $data->connectPDO();
$outList = $data->requestOut($pdo);

$studentService = new studentList;

$students = $studentService->createStudentList($outList);



// Вызываем вид, чтобы отобразить их
require (__DIR__ . '/../view/outPut.phtml');