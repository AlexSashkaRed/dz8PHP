<?php
$htmHead = "<!DOCTYPE HTML>
<html>
    <head>
    <meta charset='utf-8'>
    <title>ДЗ php 8 задание №2</title>
</head>
<body>
    Некая информация обо мне как об авторе:<br>
    'Нормальный автор, талантливый'<br><br>";
$htmlEnd = "
    <h2>
        <ul>
            <?php  header('Location: ./dz7/index.php'); ?>
            <li><a href = 'dz6file1.php'>Файл отсутствует</a></li>
            <li><a href = 'dz6file2.php?text=какой-то+случайный+текст'>Сохранить файл</a></li>
            <li><a href = 'dz6file3.php'>Страница счетчика</a></li>
            <li><a href = 'dz6file4.php'>КСтарница отображения</a></li>
        </ul>
    </h2>
</body>
</html>
";
$htmlForm = "    <form enctype='multipart/form-data' action='post.php' method='POST'>     
        <label>
            <span>C каким именем зайти</span>
            <input name='login' type='text'/><br>    
        </label>      
        <input type='submit' value='Войти' />           
    </form>";
