<?php
// Параметры подключения
$servername = "localhost"; // или IP-адрес сервера
$username = "root"; // замените на ваше имя пользователя
$password = "root"; // замените на ваш пароль
$dbname = "task2"; // замените на вашу базу (можно оставить пустым для доступа к серверу)

// Создание соединения
$conn = new mysqli($servername, $username, $password, $dbname);

// Проверка соединения
if ($conn->connect_error) {
    die("<b>Соединение невозможно:&nbsp;</b>" . $conn->connect_error);
}

// запрос на получения версии работы с MySQL
$query = "SELECT VERSION()";
$result = $conn->query($query);

// Проверка и вывод результат
if ($result) {
    $row = $result->fetch_assoc();
    echo "<b>Версия MySQL:&nbsp;</b>" . $row["VERSION()"]; 
} else {
    echo "Ошибка!!! Причина:&nbsp;" . $conn->error;
}

// Закрываем соединение
$conn->close();
?>
