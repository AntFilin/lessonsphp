<?php
/**
 * Created by PhpStorm.
 * User: antfilin
 * Date: 18.11.2015
 * Time: 20:23
 */

include 'post.html.php';

$posts = array (
    "post1" => array ('title','body'),
    "post2" => array ('title','body'),
    "post3" => array ('title','body')

);
foreach ($posts as $key => $type)
{
    echo "<b>$key</b> <br>";
    foreach ($type as $posts)
    {
        echo "$posts <br> ";
    }
}


