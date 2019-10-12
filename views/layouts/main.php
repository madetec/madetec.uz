<?php

/* @var $this \yii\web\View */

/* @var $content string */

use app\assets\AppAsset;
use yii\helpers\Html;
use yii\helpers\Url;

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
<nav class="navbar navbar-expand-md" data-state = "scroll-top">
    <div class="container">

        <!-- Logo -->
        <a class="logo" href="/">
            <img src="/img/new-img/logo/madetec.webp" alt="logo">
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"><i class="fas fa-bars"></i></span>
        </button>

        <!-- navbar links -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="\">Главная</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="" data-scroll-nav="1">Услуги</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= Url::to(['/site/project']) ?>">Проекты</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="" data-scroll-nav="3">Новости</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="" data-scroll-nav="4">Компания</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contacts" data-scroll-nav="5">Контакты</a>
                </li>

            </ul>
        </div>
    </div>
</nav>
<!-- End Navbar = -->

<?= $content; ?>



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