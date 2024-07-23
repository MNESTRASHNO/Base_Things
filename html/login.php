<?php
$username = $_POST['username'];
$password = $_POST['password'];

// Подключение к базе данных
$mysqli = new mysqli("db", "root", "rootpass", "sql_injection_demo");

// Проверка соединения
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Простой SQL запрос, уязвимый к SQL инъекциям
$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";

$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
    // Пользователь аутентифицирован, перенаправляем на защищенную страницу
    header("Location: secret5469123142154.php");
    exit();
} else {
    echo "Invalid username or password.";
}

$mysqli->close();
?>
