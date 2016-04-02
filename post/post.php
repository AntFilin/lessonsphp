<?php
include 'db_connection.php'; //Уберу потом

class Db
{
    const DBLOCATION = 'localhost';
    const DBUSER = 'root';
    const DBPASSWD = '';
    const DBNAME = 'blog';
    protected $connect;
    protected $result;
    protected $array;

    public function __construct()
    {
        $this->connect = mysqli_connect($this::DBLOCATION, $this::DBUSER, $this::DBPASSWD, $this::DBNAME);
    }

    /**
     * @param $sql
     */
    protected function query($sql, $result)
    {
        $this->result = mysqli_query($sql, $this->connect);
        $this->array = mysqli_fetch_assoc($result);
        /* Или здесь я должен собирать в массив через подобную конструкцию?

         while($row = mysqli_fetch_assoc($result)) {
            $posts[] = $row;}
}
        */

    }
}


class DbPost extends Db{
    /**
     * @param string $fields - выбор полей, поставил выбирать все.
     * @param $tables -таблицы
     * @param $order_by - упорядочить по
     * @param $order - принимает значение DESC
     */
    public static function getPosts($fields = '*', $tables, $order_by, $order){

    }
}

$db = new Db();
$db->__construct();
$db->query(); // Тут хотел вызвать функцию от параметра $sql, но по сути, я сюда и должен формировать сам sql-запрос к базе?
// Тут последним должен идти статический метод getPost, вызывать пока нечего.


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