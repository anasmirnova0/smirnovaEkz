<?php
session_start();

$host='localhost';
$database='kino';
$user='root';
$password='';

$link = mysqli_connect($host, $user, $password, $database) or die("Ошибка: " . mysqli_error($link));

if(isset($_POST['email']) && isset($_POST['parol'])) {
    $email = $_POST['email'];
    $parol = $_POST['parol'];

    $query = "SELECT * FROM sotrudniks WHERE email='$email' AND parol='$parol'";
    $result = mysqli_query($link, $query);

    if(mysqli_num_rows($result) == 1) {
        $_SESSION['email'] = $email;
        echo "success"; // Отправляем "success" при успешной аутентификации
        exit();
    } else {
        echo "error"; // Отправляем "error" если пользователь не найден
        exit();
    }
}
?>