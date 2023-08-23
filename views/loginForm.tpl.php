<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo ($pageData['title']) ?></title>
</head>
<body>
<?php include (ROOT.'/views/components/header.php')?>

    <?php if ($pageData['isLogged']): ?>
        Здравствуйте,
        <?php echo($pageData['accountInfo']['first_name'])?>
        <h1>Редактировать аккаунт</h1>
        <form method="post" action="update" style="display: flex; flex-direction: column; width: 400px">
            <input name="first_name" required placeholder="Имя">
            <input name="last_name" required placeholder="Фамилия">
            <input name="email" required placeholder="Почта">
            <input name="password" type="password" required placeholder="Пароль">
            <input name="company_name" placeholder="Компания">
            <input name="position" placeholder="Занимаемая должность">
            <input name="phone_number1" placeholder="Номер телефона">
            <input name="phone_number2" style="display: none" placeholder="Номер телефона">
            <input name="phone_number3" style="display: none" placeholder="Номер телефона">
            <button name="button-update">отредактировать</button>
        </form>
    <?php else:?>
        Пожалуйста, войдите в аккаунт
        <h1>Войти</h1>
        <form method="post" action="login">
            <input name="email" required>
            <input type="password" name="password" required>
            <button name="button-log">Войти</button>
        </form>
    <?php endif?>




</body>
</html>