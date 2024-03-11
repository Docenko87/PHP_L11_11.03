<?php
//session
session_start();

echo "<h1>Страница 1</h1>";
$num = 10;

echo "<p>Значение = $num</p>";

$_SESSION['num'] = $num;


echo "<a href='forward.php'>Вперед</a>";
