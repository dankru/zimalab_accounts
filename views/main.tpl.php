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
    <link rel="stylesheet" href="../assets/css/styles.css">
    <title><?php echo($pageData['title'])?></title>

</head>
<body>
    <?php include (ROOT.'/views/components/header.php')?>
    <?php include (ROOT.'/views/components/greeting.php')?>
    <?php include (ROOT.'/views/components/footer.php')?>
</body>
</html>