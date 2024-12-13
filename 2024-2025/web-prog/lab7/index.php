<?php

// Установка cookie
setcookie('test', 'TEST1', ['path' => '/']);

setcookie('test','',['expires' => time()-3600, 'path'=>'/']);

if(isset($_GET['do']) && $_GET['do'] == 'reset') {
    setcookie('count','',time()-3600,'/');
    header("Location:index.php");
    die;
}

isset($_COOKIE['count']) ? setcookie('count', ++$_COOKIE['count'], time()+3600, '/') : setcookie('count', 1, time()+3600, '/');

echo "Вы посещали страницу: " . ($_COOKIE['count']??1);