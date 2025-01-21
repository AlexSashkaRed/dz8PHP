<?php
declare(strict_types=1);
include("htmlVars.php");

session_start();
$formPlace = isset($_SESSION['login']) ? "Добро пожаловать опять, мистер " . $_SESSION['login'] . "<br> <a href = 'exit.php'>Разлогин тут</a>": $htmlForm ;


echo $htmHead . $formPlace . $htmlEnd;
