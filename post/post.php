<?php

$posts = [
    "2015-12-01" => ['title' => 'title of post1','body' => 'body of post1','date' =>'13:01:00'],
    "2015-12-05" => ['title' => 'title of post2','body' => 'body of post2','date' =>'13:05:00'],
    "2015-12-03" => ['title' => 'title of post3','body' => 'body of post3','date' =>'13:10:00']
];

ksort($posts);
array_values($posts);

include 'post.html.php';

