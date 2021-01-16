<?php


$i = 1 + 1;

if ($i):
    $body = "<h1 class='blue'>$i</h1>";
else:
    $body = "<h1 class='red'>$i</h1>";
endif;

$tpl = file_get_contents("template.html");

$tpl = str_replace('{body}', $body, $tpl);

echo $tpl;