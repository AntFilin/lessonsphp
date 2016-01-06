<?php
include 'db_connection.php';
// Data
$posts = [
    ['title' => 'title of post1','body' => 'body of post1','date' => '2015-12-03 13:00:00'],
    ['title' => 'title of post2','body' => 'body of post2','date' => '2015-12-02 13:00:00'],
    ['title' => 'title of post3','body' => 'body of post3','date' => '2015-12-01 13:00:00']
];

// Params
$params = [
    'date_sort' => !empty($_GET['date_sort']) ? $_GET['date_sort'] : 'new'
];

// Sort by date
$posts_date = [];
foreach($posts as $post)
{
    $posts_date[$post['date']] = $post;
}

if($params['date_sort'] === 'old')
    krsort($posts_date);
else
    ksort($posts_date);

$posts = array_values($posts_date);

// Generate url
$params_copy = $params;
$params_copy['date_sort'] = 'old';
$url_old = 'http://localhost:8000/post/post.php?'.http_build_query($params_copy);

$params_copy['date_sort'] = 'new';
$url_new = 'http://localhost:8000/post/post.php?'.http_build_query($params_copy);

include 'post.html.php';