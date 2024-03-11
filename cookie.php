<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    //cookie
    if (isset($_COOKIE['region'])) {
        
        $region = $_COOKIE['region'];
        echo "<p>Ваш регион: $region</p>";
        setcookie('region', $region, time() - 60); //удалить
    } elseif (isset($_POST['region'])) {
        $region = $_POST['region'];
        setcookie('region', $region, time() * 60);


        //удаление куку путем указания прошедшего времени
        // setcookie('region', $region, time() - 60);
    }
    ?>

    <form action="" method="POST">
        <label for="region">Ваш регион:</label>
        <input type="text" name="region" placeholder="Например, Россия">
        <button type="submit">Отправить</button>
    </form>
</body>

</html>