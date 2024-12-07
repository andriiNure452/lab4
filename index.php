<?php

session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $userName = $_POST['name'];
    $_SESSION['userName'] = $userName;
    setcookie('userName', $userName, time() + (30 * 24 * 60 * 60), '/'); 
    header("Location: welcome.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Введіть ім'я користувача</title>
</head>
<body>
    <h2>Введіть ваше ім'я:</h2>
    <form method="post" action="">
        <input type="text" name="name" required placeholder="Ваше ім'я" />
        <input type="submit" value="Надіслати" />
    </form>
</body>
</html>
