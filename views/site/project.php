<?php

/* @var $this yii\web\View */
use yii\helpers\Url;

$this->title = 'Madetec Solution | Project';

?>


<!-- Start Header -->
<header class="valign header" data-color="#00bab1">

    <div class="bg-main-container bg-project">
        <div class="head-block-home container">
            <div class="row main-head-content">
                <div class="col-md-6 offset-md-1 pt-30" data-aos="fade-left" data-aos-once="true" style="margin-left:6%;">
                    <div class="logo-head logo-head-develop row">
                    	<span class="text-logo-head pt-5">Проекты</span>
                    </div>
                   
             
                    <a class="btn-pusk btn-link row">Портфолио</a>
                </div>

            </div>
        </div>
    </div>
    <div class="col-md-6 contain-rgt-display-img digital-img" data-aos="fade-right"  data-aos-once="true">
        <div class="pic-digital">
            <img src="\img\new-img\head-container-img\project.webp" alt="">
        </div>
    </div>
</header>
<!-- End Header==== -->

<!-- Portfolio Start -->
<section id="projects" class="companys-projects project-pg" data-scroll-index="3">
    <h2 class="text-dark text-center font-weight-bold pb-30">Приложения и Программы</h2>
    <div class="container row justify-content-between">
        <a href="<?= Url::to(['/site/watch-vault']) ?>" class="col-md-4">
            <div class="contain-project-side watch-v-project" data-aos="fade-down" data-aos-once="true">
            <div class="main-content-portfolio img-hover">
                <div class="child-content-background"></div>
                <div class="wrap-pic-filt" style="z-index:1;"></div>
                <div class="logo-project" style="z-index:2; position:relative;">
                    <img src="\img\new-img\logo\WV-logo.webp" alt="">
                </div>
                <div class="descript-project" style="z-index:2; position:relative;">
                    <p class="text-center">Приложение, призванное объединить всех поклонников, коллекционеров и производителей
                        наручных часов</p>
                </div>
            </div>

            </div>
        </a>
        <div class="contain-project-mid  col-md-4 row p-0">
            <a href="" class="align-self-start">
                <div class="brs-project img-hover" data-aos="fade-up" data-aos-once="true" data-aos-delay="400">
                <div class="child-content-background"></div>
                <div class="wrap-pic-filt" style="z-index:1;"></div>
                <div class="logo-project" style="z-index:2; position:relative;">
                    <img src="\img\new-img\logo\BRS-logo.webp" alt="">
                </div>
                <div class="descript-project" style="z-index:2; position:relative;">
                    <p class="text-center">Первый в Узбекистане программный продукт для операций внутри компаний,
                        отвечающий современным и международным стандартам аналитического программного обеспечения
                    </p>
                </div>
             </div>
            </a>
            <a href="" class="align-self-end pt-20">
                <div class="telecom-cart-project img-hover" style="z-index:2; position:relative;" data-aos="fade-down" data-aos-once="true" data-aos-delay="400">
                <div class="child-content-background"></div>
                <div class="wrap-pic-filt" style="z-index:1;"></div>
                <div class="logo-project" style="z-index:2; position:relative;">
                    <img src="\img\new-img\logo\Telecomcar.webp" alt="">
                </div>
                <div class="descript-project" style="z-index:2; position:relative;">
                    <p class="text-center">Приложение для мониторинга служебных автомобилей в режиме реального времени с целью оптимизации процессов перевозки грузов и сотрудников
                    </p>
                </div>
            </div>
            </a>
            
        </div>
        <a href="" class="col-md-4">
            <div class="contain-project-side dood-project" data-aos="fade-down" data-aos-once="true">
            <div class="main-content-portfolio img-hover">
                <div class="child-content-background"></div>
                <div class="wrap-pic-filt" style="z-index:1;"></div>
                <div class="logo-project" style="z-index:2; position:relative;">
                    <img src="\img\new-img\logo\Dood-logo.webp" alt="">
                </div>
                <div class="descript-project" style="z-index:2; position:relative;">
                    <p class="text-center">Новое слово в мире интернет магазинов и электронной комерции,
                        новая эра онлайн покупок</p>
                </div>
            </div>

            </div>
        </a>

    </div>
    <a href="<?= Url::to(['/site/project']) ?>" class="btn-link btn-portfolio-view" id="show-more-project"><span class="link-wrap"><p>Загрузить еще ...</p></span></a>
</section>


<section id="brending" class="brending-design project-pg" data-scroll-index="3">
    <h2 class="text-center text-dark font-weight-bold">Брендинг и Дизайн</h2>
    <div class="container row justify-content-center pt-30">
        <a href="" class="col-md-6">
            <div class="left-view-design-prj">
            <div class="item-view-prj prj-extravel img-hover">
                <div class="child-content-background"></div>
                <div class="wrap-pic-filt" style="z-index:1;"></div>
                <div class="logo-project" style="padding-top: 50%;">
                    <img src="\img\new-img\logo\explore.webp" alt="">
                </div>
            
            </div>
            </div>
        </a>
        
            <div class="right-view-design-prj col-md-6 row">
            <a href="" class="align-self-start">
                <div class="item-view-prj prj-gecko img-hover">
                    <div class="child-content-background"></div>
                <div class="wrap-pic-filt" style="z-index:1;"></div>
                <div class="logo-project pt-70">
                    <img src="\img\new-img\logo\gecko-white.webp" alt="">
                </div>
            </div>
            </a>
            <a href="" class="align-self-end">
                <div class="item-view-prj prj-challenge img-hover">
                    <div class="child-content-background"></div>
                <div class="wrap-pic-filt" style="z-index:1;"></div>
                <div class="logo-project">
                    <img src="\img\new-img\logo\chalenge.webp" alt="">
                </div>
            </div>
        </a>
        </div>
        

    </div>
    <a href="<?= Url::to(['/site/project']) ?>" class="btn-link btn-portfolio-view" id="show-more-project"><span class="link-wrap"><p>Загрузить еще ...</p></span></a>
</section>

<!-- Portfolio-Digital Start -->
<section id="projects" class="companys-projects project-pg" data-scroll-index="3">
    <h2 class="text-dark text-center font-weight-bold pb-30">Digital Marketing</h2>
    <div class="container row justify-content-between">
        <a href="" class="col-md-4">
            <div class="contain-project-side watch-v-project" data-aos="fade-down" data-aos-once="true">
            <div class="main-content-portfolio img-hover">
                <div class="child-content-background"></div>
                <div class="wrap-pic-filt" style="z-index:1;"></div>
                <div class="logo-project" style="z-index:2; position:relative;">
                    <img src="\img\new-img\logo\WV-logo.webp" alt="">
                </div>
                <div class="descript-project" style="z-index:2; position:relative;">
                    <p class="text-center">Приложение, призванное объединить всех поклонников, коллекционеров и производителей
                        наручных часов</p>
                </div>
            </div>

        </div>
    </a>
        <div class="contain-project-mid  col-md-4 row p-0">
            <a href="" class="align-self-start">
                <div class="brs-project img-hover" data-aos="fade-up" data-aos-once="true" data-aos-delay="400">
                <div class="child-content-background"></div>
                <div class="wrap-pic-filt" style="z-index:1;"></div>
                <div class="logo-project" style="z-index:2; position:relative;">
                    <img src="\img\new-img\logo\BRS-logo.webp" alt="">
                </div>
                <div class="descript-project" style="z-index:2; position:relative;">
                    <p class="text-center">Первый в Узбекистане программный продукт для операций внутри компаний,
                        отвечающий современным и международным стандартам аналитического программного обеспечения
                    </p>
                </div>
            </div>
        </a>
            <a href="" class="align-self-end">
                <div class="telecom-cart-project pt-20 img-hover" style="z-index:2; position:relative;" data-aos="fade-down" data-aos-once="true" data-aos-delay="400">
                    <div class="child-content-background"></div>
                <div class="wrap-pic-filt" style="z-index:1;"></div>
                <div class="logo-project" style="z-index:2; position:relative;">
                    <img src="\img\new-img\logo\Telecomcar.webp" alt="">
                </div>
                <div class="descript-project" style="z-index:2; position:relative;">
                    <p class="text-center">Приложение для мониторинга служебных автомобилей в режиме реального времени с целью оптимизации процессов перевозки грузов и сотрудников
                    </p>
                </div>
            </div>
        </a>
            
        </div>
        <a href="" class="col-md-4">
            <div class="contain-project-side dood-project" data-aos="fade-down" data-aos-once="true">
            <div class="main-content-portfolio img-hover">
                <div class="child-content-background"></div>
                <div class="wrap-pic-filt" style="z-index:1;"></div>
                <div class="logo-project" style="z-index:2; position:relative;">
                    <img src="\img\new-img\logo\Dood-logo.webp" alt="">
                </div>
                <div class="descript-project" style="z-index:2; position:relative;">
                    <p class="text-center">Новое слово в мире интернет магазинов и электронной комерции,
                        новая эра онлайн покупок</p>
                </div>
            </div>

        </div>
    </a>

    </div>
    <a href="<?= Url::to(['/site/project']) ?>" class="btn-link btn-portfolio-view" id="show-more-project"><span class="link-wrap"><p>Загрузить еще ...</p></span></a>
</section>


<section id="your-ideas" class="your-ideas">
    <div class="container">
        <div class="form-contain">
            <h3 class="text-center" data-aos="fade-up" data-aos-delay="100" data-aos-once="true">
                <span>Место для Ваших идей</span>
            </h3>

            <div class="row">

                <div class="col-sm-12">
                    <form class="form" id="contact-form" method="post">

                        <div class="messages"></div>

                        <div class="controls">

                            <div class="row mt-30">

                                <div class="col-lg-4 col-md-6">
                                    <div class="form-group" data-aos="fade-up" data-aos-delay="100" data-aos-once="true">
                                        <input id="form_name" type="text" name="name" placeholder="Имя" required="required">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="form-group" data-aos="fade-up" data-aos-delay="200" data-aos-once="true">
                                        <input id="form_email" type="email" name="email" placeholder="Email" required="required">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12">
                                    <div class="form-group" data-aos="fade-up" data-aos-delay="300" data-aos-once="true">
                                        <input id="form_phone" type="tel" name="phone"  size="20" minlength="9" maxlength="14" placeholder="Номер телефона">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group" data-aos="fade-up" data-aos-delay="400" data-aos-once="true">
                                        <textarea id="form_message" name="message" placeholder="Сообщение" rows="4" required="required"></textarea>
                                    </div>
                                </div>

                                <div class="col-md-6 own-bag">
                                    <span><input type="submit" class="main-button" value="Отправить и ждать звонка"></span>
                                </div>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- Start Footer -->
<section class="footer bg-fon-project">
    <div class="container pt-40">

        <div class="row">
            <div class="col-md-4 border-max">
                <div class="madetec-links">
                    <div class="icon-logo-madetec mb-20">
                        <img src="\img\new-img\logo\madetec.webp" alt="">
                    </div>
                    <p class="mb-0"><a href="">Главная</a></p>
                    <p class="mb-0"><a href="">Услуги</a></p>
                    <p class="mb-0"><a href="">Проекты</a></p>
                    <p class="mb-0"><a href="">Новости</a></p>
                    <p class="mb-0"><a href="">Компания</a></p>
                    <p class="mb-0"><a href="">Контакты</a></p>

                </div>
            </div>
            <div class="contact-info col-md-8 ">
                <h2>Контакты</h2>
                <div class="contain-info-block row justify-content-around ">
                    <div class="col-md-5 border pt-20 pb-20">
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
                    <div class="col-md-5 border">
                        <div class="address pt-20">

                            <h4><i class="fas fa-map-marker"></i> Мы здесь</h4>
                            <p>Узбекистан, г.Ташкент, ул. Нуронийлар, 32, 3й этаж, кабинет №15</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 text-center mt-30">
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
</section>
<!-- End Footer  -->





<!-- End Contact  -->

