<?php
include 'db_connection.php'; //Уберу потом

class Db {
    const dblocation = 'localhost';
    const dbuser = 'root';
    const dbpasswd = '';
    const dbname = 'blog';
    private $connect;
    public $result;
    public function __construct() {
        $this->connect = mysqli_connect($this::dblocation, $this::dbuser, $this::dbpasswd, $this::dbname);
    }

    /**
     * @param $sql
     */
    protected function query($sql) {
        $this->/*сюда хотел переменную $result, но ругается IDE, что-то не правильно делаю */ = mysqli_query($sql, $this->connect);
    }

    // После отправки sql-запроса, результат нужно собрать в массив, это нужно делать внутри метода query($sql) или это должен быть отдельный метод?

class DbPost extends Db {
    public static function getPosts($fields='*',$tables, $order_by, $order ) {


    }
}

/* Zapros do sql na sortirovky po date
"SELECT * FROM posts ORDER BY dt_post"
"SELECT * FROM posts ORDER BY dt_post DESC "
*/


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