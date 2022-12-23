<!DOCTYPE html>
<html lang="ru">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-
    scale=1.0">
    <meta http-equiv="X-UA-compatble" content="ie=edge">
    <link rel="stylesheet" href="/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
   <title>PHP Контактна форма</title>
</head>
<body>
<?php require "blocks/header.php" ?>
<div class="container mt-5">
    <h3>Контактна форма</h3>
<form action="check.php" method="post">
    <input type="email" name="email" placeholder="Введіть Email"
    class="from-control"><br>
    <textarea name="message" class="form-control"placeholder="Введіть ваше повідомлення"></textarea><br>
    <buttont type="submit" name="send" class="btn btn-outline-success">Надіслати</button>
</form>
</div>
<?php require "blocks/footer.php" ?>
</body>
</html>
