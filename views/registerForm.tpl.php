<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:opsz@9..40&family=Playfair+Display:wght@400;500&display=swap" rel="stylesheet">
    <!--Styles-->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/styles.css">
    <title><?php echo($pageData['title'])?></title>

</head>
<body>
    <div class="wrapper">
        <?php include (ROOT.'/views/components/header.php')?>
        <div class="main-block">
            <div class="main-block__container column _container">
            <h1>Создать аккаунт</h1>
            <form method="post" action="register" style="display: flex; flex-direction: column; width: 400px">
                <input name="first_name" required placeholder="Имя">
                <input name="last_name" required placeholder="Фамилия">
                <input name="email" required placeholder="Почта">
                <input name="password" type="password" required placeholder="Пароль">
                <input name="company_name" placeholder="Компания">
                <input name="position" placeholder="Занимаемая должность">
                <input name="phone_number1" placeholder="Номер телефона">
                <input name="phone_number2" style="display: none" placeholder="Номер телефона">
                <input name="phone_number3" style="display: none" placeholder="Номер телефона">
                <button name="button-reg">Зарегистрироваться</button>
            </form>
            </div>
        </div>
        <?php include (ROOT.'/views/components/footer.php')?>

    </div>
</body>
</html>
