<?php


function html($text) {
    return htmlspecialchars($text, ENT_QUOTES);
}

$link = mysqli_connect("localhost", "root", "root");

if ($link == false):
    print("Ошибка: Невозможно подключиться к MySQL " . mysqli_connect_error());
    exit();
endif;

mysqli_set_charset($link, "utf8");

include ("template/outPut.html");
