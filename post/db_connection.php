<?php
$dblocation = "localhost";
$dbuser = "root";
$dbpasswd = "";
$dbname = "blog";

$connection = mysqli_connect($dblocation,$dbuser,$dbpasswd, $dbname);

if (!$connection) {
    exit ("<P> В настоящий момент сервер базы данных недоступен</P>");
}
else {
    echo('<P>Соединение установлено.</P>');
}

$query = "SELECT * FROM posts";
$result = mysqli_query($connection, $query);
if (!$result) {
    die("Запрос не удался.");
}
while($row = mysqli_fetch_assoc($result)){
    $posts[] = $row;
    print_r($posts) ;
}


mysqli_free_result($result);
mysqli_close($connection);

