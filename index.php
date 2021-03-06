<?php

// Отправляем правильную кодировку.
header('HTTP/1.1 404 Not Found');
header('Content-Type: text/html; charset=UTF-8');

// Выводим все полученные через POST параметры.
// если запрос 2-5) сделан правильно, то можно будет увидеть
// отправленный комментарий в ответе веб-сервера.
print_r($_POST);

// Hello World
print('Привет, мир!');
// Чтобы получить в переменную данные из сущности запроса.
$xml = file_get_contents('php://input');

// Память очищается в конце работы скрипта.
if (isset($v1)) {
  $v1++;
}
else {
  $v1 = 1;
}
print($v1); 
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <title>second-task</title>
</head>
<body>
    <h1>Подключение к серверу при помощи PUTTY с портом 80</h1>
    <img src="./screenshots/putty-connect.png" alt="putty-connect">
    <h1>HTTP 1.0</h1>
    <p>Отправляем запрос GET по HTTP 1.0</p>
    <img src="./screenshots/HTTP-1.0.png" alt="http-1.0">
    <h1>HTTP 1.1</h1>
    <p>Отправляем запрос GET по HTTP 1.1 с добавлением поля Host, так как иначе он не выполнится</p>
    <img src="./screenshots/HTTP-1.1.png" alt="http-1.1">
    <h1>Размер file.tar.gz</h1>
    <p>с помощью запроса HEAD узнаем в его ответе размер файла в боле Content-Length</p>
    <img src="./screenshots/file.tar.png" alt="file.tar">
    <h1>Медиатип image.png</h1>
    <p>с помощью запроса HEAD узнаем в его ответе медиатип файлы image в поле Content-Type</p>
    <img src="./screenshots/image.png" alt="image">
    <h1>Получаем первые 200 байт file.tar</h1>
    <p>отправляем HEAD запрос с ограничением на количество байт в ответе</p>
    <img src="./screenshots/200BYTES.png" alt="100byte">
    <h1>Определем кодировку index.php с помощью отправки запрова методом HEAD</h1>
    <img src="./screenshots/code.png" alt="code-index.php">
    <h1>Отсавляем комментарий к index.php с помощью отправки запроса методом POST</h1>

    <img src="./screenshots/index-comment.png" alt="code-index.php">
</body>
</html>