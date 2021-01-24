<?php 

// Инициализируем наше приложение
require __DIR__ . '/../bootstrap.php';

// Получаем список объявлений
$posts = $postService->getAllPosts();

// Вызываем вид, чтобы отобразить их
require __DIR__ . '/../view/list.phtml';