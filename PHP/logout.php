<?php
session_start();

if(!isset($_SESSION['login'])) {
    header('Location: login.php');
    exit();
}

unset($_SESSION['login']);
session_destroy();
header('Location: login.php');