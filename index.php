<?php


function html($text) {
    return htmlspecialchars($text, ENT_QUOTES);
}

include ("template/outPut.html");