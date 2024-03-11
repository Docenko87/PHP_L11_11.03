<?php
session_start();

$name = session_name();
$id = session_id();

echo '<h1>Страница 2</h1>';
echo "<p>Название сессии: name</p>";
echo "<p>ID сессии: id</p>";

if (isset($_SESSION['num'])) {
    $num = $_SESSION['num'];
    echo "<p>Значение с предыдущей страницы: $num</p>";
}
