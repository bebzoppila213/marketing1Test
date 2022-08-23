<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="views/style/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
    <title>Document</title>
</head>
<body>
    <header class="header">
        <div class="container">
            <div class="header__inner">
                <div class="header__logo">
                    <div class="header__logo-item">
                        logo
                    </div>
                </div>
                <div class="header__phone">
                <a class="phone" href="tel:+7(978) 051-10-50">+7(978) 051-10-50</a>
                </div>
                <div class="header-burger">
                    <div class="header-burger__linear"></div>
                    <div class="header-burger__linear"></div>
                    <div class="header-burger__linear"></div>
                </div>
                <div class="header__nav">
                    <button class="header__nav-close">x</button>
                    <nav class="nav">
                        <ul class="nav__list"> 
                            <?php foreach($links as $key => $value): ?>
                            <li class="nav__item"><a class="nav__link" href="<?= $value ?>"><?= $key ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <script src="/views/js/burger.js"></script>
