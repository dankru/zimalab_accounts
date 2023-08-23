<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo($pageData['title'])?></title>
</head>
<body>
<?php include (ROOT.'/views/components/header.php')?>

<h1>Список аккаунтов:</h1>
<h2>Всего аккаунтов: <?php echo($pageData['count'])?></h2>
<div>
    <?php foreach ($pageData['accountList'] as $account) {
            echo($account['first_name']."<br>");
    }?>
</div>

</body>
</html>