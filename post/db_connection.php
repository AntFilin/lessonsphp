<?php
$dblocation = "localhost";
$dbuser = "root";
$dbpasswd = "";
$dbname = "blog";

$connection = mysqli_connect($dblocation,$dbuser,$dbpasswd, $dbname);

if (!$connection) {
    exit ("<P> В настоящий момент сервер базы данных недоступен</P>");
}
mysqli_query($connection,'SET NAMES "utf8"');
mysqli_query($connection,"set character_set_connection=utf8");
mysqli_query($connection,"set names utf8");

$query = "SELECT * FROM posts";
$result = mysqli_query($connection, $query);
if (!$result) {
    die("Запрос не удался.");
}
while($row = mysqli_fetch_assoc($result)) {
    $posts[] = $row;

}


mysqli_free_result($result);
mysqli_close($connection);
error_reporting ( 'E_ALL' ) ;
ini_set('display_errors','On');
