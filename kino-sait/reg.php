<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Регистрация</title>
</head>
<body>
<?php
    $host='localhost';
    $database='kino';
    $user='root';
    $password='';
    
    $link=mysqli_connect($host,$user,$password,$database) or die ("Ошибка".mysqli_error($link));
    if(isset($_POST['familia']) && isset($_POST['imya']) && isset($_POST['otchestvo']) && isset($_POST['doljnost'])
    && isset($_POST['pasport_dannie']) && isset($_POST['telefon']) && isset($_POST['email'])
    && isset($_POST['parol'])) {
        $familia = $_POST['familia'];
        $imya = $_POST['imya'];
        $otchestvo = $_POST['otchestvo'];
        $doljnost = $_POST['doljnost'];
        $pasport_dannie = $_POST['pasport_dannie'];
        $telefon = $_POST['telefon'];
        $email = $_POST['email'];
        $parol = $_POST['parol'];
        
        if($familia && $imya && $otchestvo && $doljnost && $pasport_dannie && $telefon && $email && $parol) {
            $query = "INSERT INTO sotrudniks(familia,imya,otchestvo,doljnost,pasport_dannie,telefon,email,parol) 
            values ('$familia', '$imya', '$otchestvo', '$doljnost', '$pasport_dannie', '$telefon', '$email', '$parol')";
            $result = mysqli_query($link, $query) or die ("Ошибка".mysqli_error($link));
            if($result) {
                header("Location: index.php"); // Перенаправление на index.php после успешного добавления данных
            }
        }
    }
?>

<div class="container__reg">
    <h1>Регистрация</h1>
    <form method="POST" id="loginForm" class="wrapper">
        <input type="text" name="familia" placeholder="Фамилия" class="input" style="margin-top:10px" required>
        <input type="text" name="imya" placeholder="Имя" class="input" style="margin-top:10px" required>
        <input type="text" name="otchestvo" placeholder="Отчество" class="input" style="margin-top:10px" required>
        <input type="text" name="doljnost" placeholder="Должность" class="input" style="margin-top:10px" required>
        <input type="text" name="telefon" id="telefon" placeholder="Телефон" class="input" maxlength="11" style="margin-top:10px" required>
        <input type="text" name="pasport_dannie" id="pasport_dannie" placeholder="Паспортные данные" class="input" maxlength="11" style="margin-top:10px" required>
        <input type="text" name="email" placeholder="email" class="input" style="margin-top:20px" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
        <input type="text" name="parol" placeholder="parol" class="input" style="margin-top:10px" required>
        
        <button class="btn" id="loginBtn" style="margin-top:15px">Зарегистрироваться</button>
    </form>
    <button class="btn" style="margin-top:15px"><a href="index.php">Назад</a></button>
</div>


<script>
    // Запрет ввода курсора в поля телефона и паспортных данных
    document.getElementById('telefon').addEventListener('input', function (e) {
        this.value = this.value.replace(/[^0-9]/g, '');
    });

    document.getElementById('pasport_dannie').addEventListener('input', function (e) {
        this.value = this.value.replace(/[^0-9]/g, '');
    });
</script>
</body>
</html>