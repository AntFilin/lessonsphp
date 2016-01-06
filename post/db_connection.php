<?php
$dblocation = "localhost";
$dbuser = "root";
$dbpasswd = "";
$dbcnx = mysqli_connect($dblocation,$dbuser,$dbpasswd);
if (!$dbcnx) {
    exit ("<P> В настоящий момент сервер базы данных недоступен</P>");
}
else {
    echo('<P>Соединение установлено.</P>');
}



