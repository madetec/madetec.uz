<?php

/* @var $this \yii\web\View */

/* @var $content string */

use app\assets\AppAsset;
use yii\helpers\Html;

if (Yii::$app->controller->action->id === 'links'):
    echo $this->render(
        'main-links',
        ['content' => $content]
    );
else:
    AppAsset::register($this);
?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="yandex-verification" content="aa1e3a1929ac7316" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <link rel="apple-touch-icon" sizes="180x180" href="/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicons/favicon-16x16.png">
    <link rel="manifest" href="/favicons/site.webmanifest">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <meta name="og:title" content="<?= Html::encode($this->title) ?>">
    <?php $this->head() ?>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-137783784-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag(){dataLayer.push(arguments);}

        gtag('js', new Date());

        gtag('config', 'UA-137783784-1');
    </script>
</head>
<body>
<?php $this->beginBody() ?>

<!--Loader -->
<div class="akar-loader">
    <div id="preloader">
        <div id="loader"></div>
    </div>
</div>
<!-- Loader end -->


<!-- Start Navbar -->
<nav class="navbar navbar-expand-lg">
    <div class="container">

        <!-- Logo -->
        <a class="logo" href="#">
            <img src="/images/logo.png" alt="logo">
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"><i class="fas fa-bars"></i></span>
        </button>

        <!-- navbar links -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Главная</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-scroll-nav="1">О нас</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-scroll-nav="2">Портфолио</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-scroll-nav="3">Команда</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-scroll-nav="4">Отзывы</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-scroll-nav="5">Блог</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-scroll-nav="6">Контакты</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- End Navbar = -->

<?= $content; ?>

<!-- Start Footer -->
<section class="footer bg-second">
    <div class="container">

        <div class="row">
            <div class="col-md-4 border">
                <i class="fas fa-envelope"></i>
                <h4>Для писем</h4>
                <p><a href="mailto:feedback@madetec.uz" onclick="ym(52667527, 'reachGoal', 'mail_feedback'); return true;">feedback@madetec.uz</a></p>
            </div>
            <div class="col-md-4 border">
                <div class="address">
                    <i class="fas fa-map-marker"></i>
                    <h4>Мы здесь</h4>
                    <p>Узбекистан, г.Ташкент, ул. Нуронийлар, 32, 3й этаж, кабинет №15</p>
                </div>
            </div>
            <div class="col-md-4 border-max">
                <div class="address">
                    <i class="fas fa-phone"></i>
                    <h4>Позвонить нам</h4>
                    <p><a href="tel:977476044" onclick="ym(52667527, 'reachGoal', 'phone_7476044'); return true;">+998 ( 97 ) 747 6044</a></p>
                    <p><a href="tel:998001559" onclick="ym(52667527, 'reachGoal', 'phone_8001559'); return true;">+998 ( 99 ) 800 1559</a></p>
                    <p><a href="tel:998917204" onclick="ym(52667527, 'reachGoal', 'phone_8917204'); return true;">+998 ( 99 ) 891 7204</a></p>
                </div>
            </div>
            <div class="col-md-12 text-center mt-40">
                <ul class="social">
                    <li><a href="https://www.facebook.com/madetec.uz" onclick="ym(52667527, 'reachGoal', 'social_fb'); return true;"><i class="fab fa-facebook-square"></i></a></li>
                    <li><a href="#" onclick="ym(52667527, 'reachGoal', 'social_in'); return true;"><i class="fab fa-instagram"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="row mt-30 text-center">
            <div class="col-md-12">
                <p>Powered by Madetec, 2019</p>
            </div>

        </div>
    </div>
</section>
<!-- End Footer  -->

<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
        m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
    (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

    ym(52667527, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
    });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/52667527" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
<?php endif; ?>