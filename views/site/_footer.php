<?php
use yii\helpers\Url;
?>
<div class="container pt-40">

        <div class="row">
            <div class="col-md-4 border-max">
                <div class="madetec-links">
                    <div class="icon-logo-madetec mb-20">
                        <picture>
                            <source srcset="\img\new-img\small\logo\madetec.png"  media="(max-width: 600px)" class="img-cover">
                            <img src="\img\new-img\large\logo\madetec.png" alt="" class="img-cover">
                        </picture>
                    </div>
                    <p class="mb-0"><a href="/">Главная</a></p>
                    <p class="mb-0"><a href="<?= Url::to(['/site/development']) ?>">Разработка</a></p>
                    <p class="mb-0"><a href="<?= Url::to(['/site/design']) ?>">Дизайн</a></p>
                    <p class="mb-0"><a href="<?= Url::to(['/site/digital']) ?>">Digital</a></p>
                    <p class="mb-0"><a href="<?= Url::to(['/site/project']) ?>">Проекты</a></p>
                </div>
            </div>
            <div class="line-bot"></div>   
            <div class="contact-info col-md-8 " id="contacts">
                <h2>Контакты</h2>
                <div class="contain-info-block row justify-content-around ">
                    <div class="col-md-5 border pt-20 pb-20 mb-20">
                        <p class="mb-0"><a href="tel:977476044" class="contact-link" onclick="ym(52667527, 'reachGoal', 'phone_7476044'); return true;">
                                <i class="fas fa-phone" style="padding:0px 3px;"></i>+998 ( 97 ) 747 6044</a>
                        </p>
                        <p class="mb-0"><a href="tel:998001559" class="contact-link" onclick="ym(52667527, 'reachGoal', 'phone_8001559'); return true;">
                                <i class="fas fa-phone" style="padding:0px 3px;"></i>+998 ( 99 ) 800 1559</a>
                        </p>
                        <p class="mb-0"><a href="tel:998917204" class="contact-link" onclick="ym(52667527, 'reachGoal', 'phone_8917204'); return true;">
                                <i class="fas fa-phone" style="padding:0px 3px;"></i>+998 ( 99 ) 891 7204</a>
                        </p>
                        <p class="mb-0">

                            <a href="mailto:feedback@madetec.uz" class="contact-link" onclick="ym(52667527, 'reachGoal', 'mail_feedback'); return true;">
                                <i class="fas fa-envelope" style="padding:0px 3px;"></i>
                                feedback@madetec.uz
                            </a>
                        </p>
                    </div>
                    <div class="col-md-5 border mb-20">
                        <div class="address pt-20">

                            <h4><i class="fas fa-map-marker"></i> Мы здесь</h4>
                            <p>Узбекистан, г.Ташкент, ул. Нуронийлар, 32, 3й этаж, кабинет №15</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 text-center">
                <ul class="social">
                    <li><a href="https://www.facebook.com/madetec.uz" onclick="ym(52667527, 'reachGoal', 'social_fb'); return true;"><i class="fab fa-facebook-square"></i></a></li>
                    <li><a href="#" onclick="ym(52667527, 'reachGoal', 'social_in'); return true;"><i class="fab fa-instagram"></i></a></li>
                </ul>
            </div>
            </div>
        </div>
        <div class="row mt-30 text-center">
            <div class="col-md-12 text-left">
                <p>Powered by Madetec, 2019</p>
            </div>

        </div>
    </div>