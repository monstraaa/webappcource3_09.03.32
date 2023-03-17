<?php
session_save_path('./');
session_start();
if (!isset($_SESSION['counter'])) $_SESSION['counter'] = 0;
$message ="m";
if($_SESSION['counter'] == 0){
    echo "Вы еще не обновляли страницу!";
    $_SESSION['counter']++;
}
else{
    echo "Страницу обновляли - " . $_SESSION['counter'] . " раз!";
    $_SESSION['counter']++;
}

