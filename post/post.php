<?php

$posts = array (
    array ('title' => 'title of post1','body' => 'body of post1','date' => '2015-12-03 13:00:00'),
    array ('title' => 'title of post2','body' => 'body of post2','date' => '2015-12-02 13:00:00'),
    array ('title' => 'title of post3','body' => 'body of post3','date' => '2015-12-01 13:00:00')
);
$d = [
    "2015-12-03 13:00:00" => ['title' => 'title of post1','body' => 'body of post1','date' =>'2015-12-03 13:00:00'],
    "2015-12-02 13:00:00" => ['title' => 'title of post2','body' => 'body of post2','date' =>'2015-12-02 13:00:00'],
    "2015-12-01 13:00:00" => ['title' => 'title of post3','body' => 'body of post3','date' =>'2015-12-01 13:00:00']
];


if($_GET["date_sort"] === "old") {
krsort($d);
$E = array_values($d);
};

$a_param = [
    'date_sort' => $_GET['date_sort']
];
$link = 'http://localhost:8000/'.http_build_query($a_param);

include 'post.html.php';

