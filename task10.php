<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form name="form" method="POST" action="formForTask10.php">
    <label>
        Введите @mail: 
        <input type="email" name="mail">
    </label>
    <input type="submit" name="send" value="Отправить">
</form>

</body>
</html>
<?php
// session_save_path('./');
// session_start();
// if (!isset($_SESSION['mail'])) $_SESSION['mail'] = $_POST["mail"];