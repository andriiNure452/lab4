<?php

session_start();


$userName = null;

if (isset($_SESSION['userName'])) {
    $userName = $_SESSION['userName'];
} elseif (isset($_COOKIE['userName'])) {
    $userName = $_COOKIE['userName'];
}

if ($userName) {
    echo "<h1>Вітаємо, $userName!</h1>";
} else {
    echo "<h1>Вітаємо, Гість!</h1>";
}
?>
