<?php


require_once (__DIR__ .'\Post.php');
require_once (__DIR__ .'\PostService.php');

$service = new PostService;
$post = $service->getAllPosts();
