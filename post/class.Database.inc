<?php

class Db {
    const dblocation = 'localhost';
    const dbuser = 'root';
    const dbpasswd = '';
    const dbname = 'blog';

    public $sql;

    protected function query() {

    }
}

class DbPost extends Db {
    public function getPosts(){

}
}
/*
 * Zapros do sql na sortirovky po date
"SELECT * FROM posts ORDER BY dt_post"
"SELECT * FROM posts ORDER BY dt_post DESC "
*/
