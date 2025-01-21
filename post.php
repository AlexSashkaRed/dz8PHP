<?php
declare(strict_types=1);

if ($_POST["login"]!==''){
    session_start();
    $_SESSION['login'] = $_POST["login"];
}
header('Location: ./index.php');
