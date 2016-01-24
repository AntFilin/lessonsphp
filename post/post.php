<?php
include 'db_connection.php';

// Params
$params = [
    'date_sort' => !empty($_GET['date_sort']) ? $_GET['date_sort'] : 'new'
];

// Sort by date
$posts_date = [];
foreach($posts as $post)
{
    $posts_date[$post['dt_post']] = $post;
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