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

<?php if ($pageData['deleted']): ?>
    Аккаунт удалён
<?php else:?>
    При удалении аккаунта произошла ошибка
<?php endif?>




</body>
</html>