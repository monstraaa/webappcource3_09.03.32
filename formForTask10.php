<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form name="form" method="POST" style="width: min-content; display: flex; flex-direction: column;">
    <label>
        Введите @mail: 
        <input type="email" name="mail" placeholder=<?=$_POST["mail"]?>>
    </label>
    <label>
        Введите пароль: 
        <input type="pass" name="pass">
    </label>
    <input type="submit" name="send" value="Отправить">
</form>