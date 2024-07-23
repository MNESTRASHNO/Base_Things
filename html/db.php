<?php
// Подключение к базе данных
$mysqli = new mysqli("127.0.0.1", "root", "rootpass", "sql_injection_demo");

// Проверка соединения
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
} else {
    echo "Connected successfully to the database.<br>";
}

// Выполнение тестового запроса
$sql = "SELECT * FROM users";
$result = $mysqli->query($sql);

if ($result) {
    echo "Query executed successfully.<br>";
    while ($row = $result->fetch_assoc()) {
        echo "Username: " . $row['username'] . " - Password: " . $row['password'] . "<br>";
    }
} else {
    echo "Error executing query: " . $mysqli->error;
}

$mysqli->close();
?>
