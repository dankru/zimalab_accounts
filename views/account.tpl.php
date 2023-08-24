<?php
// Set elements amount per page
$perPageAmount = 5;

// Get current page
$page =  ($_GET['page']) ;

// Get elements array
$elements = $pageData['accountList'];

// Get amount of pages
$pageCount = floor(count($elements) / $perPageAmount);

//slice account array according to current page
$accounts = array_slice($elements, $page*$perPageAmount, $perPageAmount);
?>
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
    <main class="main-block">
        <div class="main-block__container column _container">
            <div class="main-block__info">
                <div class="card__subtitle">
                    Всего аккаунтов:
                </div>
            </div>
            <div class="main-block__grid grid">
                <div class="grid__body">
                    <!--insert accounts-->
                    <?php foreach ($accounts as $account):?>
                        <div class="grid__item">
                            <div class="account">
                                <div class="account_card card">
                                    <div class="card__subtitle"><?php echo($account['first_name']." ". $account['last_name']);?></div>
                                    <div class="card__subtitle"><?php echo($account['email'])?></div>
                                    <div class="card__subtitle"><?php echo($account['company_name'])?></div>
                                    <div class="card__subtitle"><?php echo($account['position'])?></div>
                                    <div class="card__subtitle"><?php echo($account['phone_number1'])?></div>
                                    <div class="card__subtitle"><?php echo($account['phone_number2'])?></div>
                                    <div class="card__subtitle"><?php echo($account['phone_number3'])?></div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach;?>
                </div>
            </div>
            <div class="pagination">
                <div class="pagination__container _container">
                    <div class="pagination__buttons">
                        <!--Pagination buttons-->

                        <?php for ($p = 0; $p <= $pageCount; $p++) :?>
                            <a href="<?php echo (DOMAIN)?>/account/?page=<?php echo ($p)?>">
                                <button class="pagination__button button"><?php echo($p + 1)?></button>
                            </a>
                        <?php endfor;?>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php include (ROOT.'/views/components/footer.php')?>
</body>
</html>