<?php include (ROOT.'/views/components/header.php')?>
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