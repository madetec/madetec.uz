<?php

/* @var $this yii\web\View */
use yii\helpers\Url;
$this->title = 'Madetec Solution | Digital Agency';

?>


<!-- Start Header -->
<header class="valign header" data-color="#00518A">

    <!-- backgroundslide -->


    <div class="bg-main-container bg-home">
        <div class="head-block-home container">
            <div class="row main-head-content">
                <div class="col-md-6 offset-md-1" data-aos="fade-left" data-aos-once="true" style="margin-left:6%;">
                    <div class="logo-head logo-head-home row">
                        <span class="text-logo-head">Проект</span>
                        <div class="logo-pic">
                            
                            <picture>
                                <source srcset="\img\new-img\small\logo\madetec.png" media="(max-width: 600px)">
                                <img src="\img\new-img\large\logo\madetec.png" alt="">
                            </picture>
                        </div>  
                    </div>
                    <div class="desript-project row" style="padding-right:5px;">
                        <h4>Доверьте <span class="font-weight-bold">процветание</span> своего бизнеса <span class="font-weight-bold">профессионалам</span>.</h4>
                    </div>
                    <a class="btn-link row text-center col-md-3 mt-20">Запуск</a>
                </div>

            </div>


        </div>
    </div>
    <div class="col-md-6 contain-rgt-display-img" data-aos="fade-right"  data-aos-once="true">
        <div class="pic-dispaly">
            <img src="\img\new-img\large\head-container-img\display.png" alt="" class="img-contain">
        </div>
    </div>
</header>
<!-- End Header==== -->
<!-- margin up -->


<!-- Start About -->
<section id="project-list" class="project-list">
    <div class="container">

        <div class="list-project-items row">
            
                <div class="madetec-project item-blck-projects col-md-6 mt-20" data-aos="fade-up" data-aos-once="true" data-aos-duration="800">
                    <div class="main-wrap-project bg-home m-aut position-relative">
                        <div class="text-blck-project">
                            <p class="title-items-project">Проект <span class="font-weight-bold">Madetec</span></p>
                            <p class="text-main">
                                Проект <span class="font-weight-bold">madetec</span> был создан с целью предоставления качественных
                                услуг и передовых инженерных решений в сфере разработки программного
                                обеспечения, приложений различного типа, дизайна и маркетинга.
                            </p>
                            <p class="text-main">А самое главное мы гарантируем <span class="font-weight-bold">качество!</span></p>
                        </div>
                    </div>
                </div>
            
            <a href="<?= Url::to(['/site/development']) ?>" class="col-md-6">

                <div class="madetec-development item-blck-projects mt-20" data-aos="fade-up" data-aos-once="true" data-aos-duration="800">
                    <div class="main-wrap-project overflow-hide position-relative">
                        <picture>
                            <source srcset="\img\new-img\small\picter\developer.jpg"  media="(max-width: 600px)">
                            <img src="\img\new-img\large\picter\developer.jpg" alt="">
                        </picture>
                        <div class="wrap-pic-filt"></div>
                        <div class="text-blck-project">
                            <p class="title-items-project"><span>Madetec</span> development</p>
                            <p class="text-main">
                                направление по разработке и имплементации многофункционального
                                программного обеспечения, приложений и Веб-платформ.
                            </p>
                        </div>
                    </div>
                </div>
            </a>
            <a href="<?= Url::to(['/site/digital']) ?>" class="col-md-6">
                <div class="madetec-digital item-blck-projects mt-20" data-aos="fade-up" data-aos-once="true" data-aos-duration="800">
                <div class="main-wrap-project overflow-hide position-relative">
                    
                     <picture>
                        <source srcset="\img\new-img\small\picter\blur-noutbook.jpg"  media="(max-width: 600px)">
                        <img src="\img\new-img\large\picter\blur-noutbook.jpg" alt="">
                    </picture>
                    <div class="wrap-pic-filt"></div>
                    <div class="text-blck-project">
                        <p class="title-items-project"><span>Madetec</span> digital</p>
                        <p class="text-main">
                            направление по предоставлению услуг в сфере маркетинга,
                            по увеличению присутствия и  продвижению на цифровых платформах.
                        </p>
                    </div>
                </div>
            </div>
            </a>
            <a href="<?= Url::to(['/site/design']) ?>" class="col-md-6">
                <div class="madetec-design item-blck-projects  mt-20" data-aos="fade-up"  data-aos-once="true" data-aos-duration="800">
                <div class="main-wrap-project overflow-hide position-relative">
            
                     <picture>
                        <source srcset="\img\new-img\small\picter\OT1C850-min.jpg"  media="(max-width: 600px)">
                        <img src="\img\new-img\large\picter\OT1C850-min.jpg" alt="">
                    </picture>
                    <div class="wrap-pic-filt"></div>
                    <div class="text-blck-project">
                        <p class="title-items-project"><span>Madetec</span> design</p>
                        <p class="text-main">
                            направление по созданию, обработке и имплементации графических
                            изображений от корпоративной идентики, до материалов в точках продаж.
                        </p>
                    </div>
                </div>
            </div>
            </a>
        </div>
     <div class="container-text-bot row">
        <div class="left-text col-md-4" data-aos="fade-down" data-aos-once="true" data-aos-duration="800">
            <p class="title-text grey font-weight-bold">Почему мы?</p>
            <p class="main-text-bot grey">Проекты выполняются квалифицированными специалистами
                в своей отрасли, что примечательно, для разработки привлекаются сотрудники
                со всех направлений, что бы создать отличающийся продукт не только функционированием,
                но и внешним видом и позиционированием. </p>
        </div>
         <div class="right-text home-items col-md-8">
             <ul class="row">
                 <li class="item-text-icon col-md-3" data-aos="fade-up" data-aos-once="true">
                     <div class="icon-cont text-center"><i class="far fa-smile-wink"></i></div>
                     <p class="text-icon grey text-center mt-15">С нами <span class="font-weight-bold">легко</span></p>
                 </li>
                 <li class="item-text-icon col-md-3" data-aos="fade-up" data-aos-once="true">
                     <div class="icon-cont text-center"><i class="far fa-clock"></i></div>
                     <p class="text-icon grey text-center mt-15">С нами <span class="font-weight-bold">быстро</span></p>
                 </li>
                 <li class="item-text-icon col-md-3" data-aos="fade-up" data-aos-once="true">
                     <div class="icon-cont text-center"><i class="far fa-thumbs-up"></i></div>
                     <p class="text-icon grey text-center mt-15">Мы гарантируем <span class="font-weight-bold">качество</span></p>
                 </li>
                 <li class="item-text-icon col-md-3" data-aos="fade-up" data-aos-once="true">
                     <div class="icon-cont text-center"><i class="far fa-calendar-check"></i></div>
                     <p class="text-icon grey text-center mt-15">Мы выполняем в <span class="font-weight-bold">сроки</span></p>
                 </li>
             </ul>
         </div>
     </div>
 </section>

 <!-- About Us -->

<section id="about-us" class="about-us position-relative">
    <div class="wrap-pic-filt" style="z-index:-1;"></div>
    <picture>
        <source srcset="\img\new-img\small\picter\code.jpg"  media="(max-width: 600px)" class="bg-about-us img-cover">
        <img src="\img\new-img\large\picter\code.jpg" alt="" class="bg-about-us img-cover">
    </picture>
    <div class="container main-content-about">
        <h1 class="text-center mb-0" data-aos="fade-down" data-aos-duration="800" data-aos-once="true">О нас</h1>
        <p class="text-center" data-aos="fade-down" data-aos-duration="800" data-aos-once="true">новая эра нашего бизнеса</p>
        <a href="" class="btn-link row col-md-2 text-center m-aut" data-aos="fade-down" data-aos-duration="800" data-aos-once="true">Узнать больше</a>
    </div>
</section>


<!-- Portfolio Start -->


<section id="portfolio" class="companys-portfolio" data-scroll-index="2">
    <div class="container row justify-content-between">
        <a href="<?= Url::to(['/site/watch-vault']) ?>" class="col-md-4">
            <div class="contain-project-side watch-v-project position-relative" data-aos="fade-down">
            <div class="main-content-portfolio img-hover position-relative m-aut overflow-hide">
                <div class="child-content-background"></div>
                <div class="wrap-pic-filt" style="z-index:1;"></div>
                <div class="logo-project" style="z-index:2; position:relative;">
                    <picture>
                        <source srcset="\img\new-img\small\logo\WV-logo.png"  media="(max-width: 600px)">
                        <img src="\img\new-img\large\logo\WV-logo.png" alt="" >
                    </picture>
                </div>
                <div class="descript-project" style="z-index:2; position:relative;">
                    <p class="text-center">приложение, призванное объединить всех поклонников, коллекционеров и производителей
                        наручных часов</p>
                </div>
           
            </div>
            

        </div>
        </a>
        <div class="contain-project-mid  col-md-4 row p-0">
            
                <div class="blck-text-top  pt-20 align-self-start" style="z-index:2; position:relative;" data-aos="fade-up">
                <h3 class="text-center">Уникальные проекты</h3>
                <p class="pt-10 text-center">Мы создаем мобильные приложения, программные обеспечения любого вида сложности
                для разных сфер бизнеса. Каждый из наших проектов уникален как со стороны функциональности, так и
                 дизайном.</p>
            </div>
            
            <a href="" class="align-self-end">
            <div class="brs-project position-relative img-hover overflow-hide">
                <div class="child-content-background"></div>
                <div class="wrap-pic-filt" style="z-index:1;"></div>
                <div class="logo-project" style="z-index:2; position:relative;">
                    <img src="\img\new-img\more\BRS-logo.png" alt="" >
                </div>
                <div class="descript-project" style="z-index:2; position:relative;">
                    <p class="text-center">первый в Узбекистане программный продукт для операций внутри компаний,
                        отвечающий современным и международным стандартам аналитического программного обеспечения
                    </p>
                </div>
            </div>
        </a>
        </div>
        <a href="" class="col-md-4">
        <div class="contain-project-side dood-project main-content-portfolio overflow-hide" data-aos="fade-down">
            <div class="img-hover">
                <div class="child-content-background"></div>
                <div class="wrap-pic-filt" style="z-index:1;"></div>
                <div class="logo-project" style="z-index:2; position:relative;">
                   <picture>
                        <source srcset="\img\new-img\small\logo\Dood-logo.png"  media="(max-width: 600px)">
                        <img src="\img\new-img\large\logo\Dood-logo.png" alt="" >
                    </picture>
                </div>
                <div class="descript-project" style="z-index:2; position:relative;">
                    <p class="text-center">новое слово в мире интернет магазинов и электронной комерции,
                        новая эра онлайн покупок</p>
                </div>
            </div>

        </div>
        </a>

    </div>
    <a href="<?= Url::to(['/site/project']) ?>" class="btn-link btn-portfolio-view text-center"><span class="link-wrap"><p>Узнать больше</p></span></a>
</section>

<!-- Reviews Start -->
<section id="reviews" class="reviews position-relative" data-scroll-index="1">
    <div class="wrap-pic-filt" style="z-index:1;"></div>
    <picture>
        <source srcset="\img\new-img\small\picter\company-coperation.jpg"  media="(max-width: 600px)" class="position-absolute img-cover">
        <img src="\img\new-img\large\picter\company-coperation.jpg" alt="" class="position-absolute img-cover">
    </picture>
    <div class="container pt-70">
        <p class="reviews-top mb-0 mt-20 text-center position-relative" data-aos="fade-up" data-aos-delay="300" data-aos-once="true">Отзывы о</p>
        <span class="logo-companys" data-aos="fade-up" data-aos-delay="100" data-aos-once="true">
           
            <picture>
                <source srcset="\img\new-img\small\logo\madetec.png"  media="(max-width: 600px)" class="img-cover">
                <img src="\img\new-img\large\logo\madetec.png" alt="" class="img-cover">
            </picture>
        </span>


        <div class="row pt-20">
            <div class="col-md-12">
                <div class="owl-carousel owl-theme">
                    <div class="review-item">
                        <div class="review-detail">
                            <div class="inf-user-review row justify-content-center mt-20">
                                <div class="avatar-user overflow-hide">
                                   
                                    <picture>
                                        <source srcset="\img\new-img\small\user-avatar\1.jpg" media="(max-width: 600px)" class="img-cover">
                                        <img src="\img\new-img\large\user-avatar\1.jpg" alt="" class="img-cover">
                                    </picture>
                                </div>
                                <div class="name-user">
                                    <h3 class="mb-0">Имя Фамилия</h3>
                                    <p class="mb-0">Должность</p>
                                </div>
                            </div>
                            <div class="review-content text-center">
                                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                                    nisi ut aliquip ex ea commodo consequat. </p>
                            </div>
                        </div>

                    </div>
                    <div class="review-item">
                        <div class="review-detail">
                            <div class="inf-user-review row justify-content-center mt-20">
                                <div class="avatar-user overflow-hide">
                                     <picture>
                                        <source srcset="\img\new-img\small\user-avatar\1.jpg" media="(max-width: 600px)" class="img-cover">
                                        <img src="\img\new-img\large\user-avatar\1.jpg" alt="" class="img-cover">
                                    </picture>
                                </div>
                                <div class="name-user">
                                    <h3 class="mb-0">Имя Фамилия</h3>
                                    <p class="mb-0">Должность</p>
                                </div>
                            </div>
                            <div class="review-content text-center">
                                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                                    nisi ut aliquip ex ea commodo consequat. </p>
                            </div>
                        </div>

                    </div>
                    <div class="review-item">
                        <div class="review-detail">
                            <div class="inf-user-review row justify-content-center mt-20">
                                <div class="avatar-user overflow-hide">
                                     <picture>
                                        <source srcset="\img\new-img\small\user-avatar\1.jpg" media="(max-width: 600px)" class="img-cover">
                                        <img src="\img\new-img\large\user-avatar\1.jpg" alt="" class="img-cover">
                                    </picture>
                                </div>
                                <div class="name-user">
                                    <h3 class="mb-0">Имя Фамилия</h3>
                                    <p class="mb-0">Должность</p>
                                </div>
                            </div>
                            <div class="review-content text-center">
                                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                                    nisi ut aliquip ex ea commodo consequat. </p>
                            </div>
                        </div>

                    </div>
                    <div class="review-item">
                        <div class="review-detail">
                            <div class="inf-user-review row justify-content-center mt-20">
                                <div class="avatar-user overflow-hide">
                                     <picture>
                                        <source srcset="\img\new-img\small\user-avatar\1.jpg" media="(max-width: 600px)" class="img-cover">
                                        <img src="\img\new-img\large\user-avatar\1.jpg" alt="" class="img-cover">
                                    </picture>
                                </div>
                                <div class="name-user">
                                    <h3 class="mb-0">Имя Фамилия</h3>
                                    <p class="mb-0">Должность</p>
                                </div>
                            </div>
                            <div class="review-content text-center">
                                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                                    nisi ut aliquip ex ea commodo consequat. </p>
                            </div>
                        </div>

                    </div>
                    <div class="review-item">
                        <div class="review-detail">
                            <div class="inf-user-review row justify-content-center mt-20">
                                <div class="avatar-user overflow-hide">
                                     <picture>
                                        <source srcset="\img\new-img\small\user-avatar\1.jpg" media="(max-width: 600px)" class="img-cover">
                                        <img src="\img\new-img\large\user-avatar\1.jpg" alt="" class="img-cover">
                                    </picture>
                                </div>
                                <div class="name-user">
                                    <h3 class="mb-0">Имя Фамилия</h3>
                                    <p class="mb-0">Должность</p>
                                </div>
                            </div>
                            <div class="review-content text-center">
                                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                                    nisi ut aliquip ex ea commodo consequat. </p>
                            </div>
                        </div>

                    </div>
                    <div class="review-item">
                        <div class="review-detail">
                            <div class="inf-user-review row justify-content-center mt-20">
                                <div class="avatar-user overflow-hide">
                                     <picture>
                                        <source srcset="\img\new-img\small\user-avatar\1.jpg" media="(max-width: 600px)" class="img-cover">
                                        <img src="\img\new-img\large\user-avatar\1.jpg" alt="" class="img-cover">
                                    </picture>
                                </div>
                                <div class="name-user">
                                    <h3 class="mb-0">Имя Фамилия</h3>
                                    <p class="mb-0">Должность</p>
                                </div>
                            </div>
                            <div class="review-content text-center">
                                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                                    nisi ut aliquip ex ea commodo consequat. </p>
                            </div>
                        </div>

                    </div>
                    <div class="review-item">
                        <div class="review-detail">
                            <div class="inf-user-review row justify-content-center mt-20">
                                <div class="avatar-user overflow-hide">
                                     <picture>
                                        <source srcset="\img\new-img\small\user-avatar\1.jpg" media="(max-width: 600px)" class="img-cover">
                                        <img src="\img\new-img\large\user-avatar\1.jpg" alt="" class="img-cover">
                                    </picture>
                                </div>
                                <div class="name-user">
                                    <h3 class="mb-0">Имя Фамилия</h3>
                                    <p class="mb-0">Должность</p>
                                </div>
                            </div>
                            <div class="review-content text-center">
                                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                                    nisi ut aliquip ex ea commodo consequat. </p>
                            </div>
                        </div>

                    </div>
            </div>
        </div>
    </div>
</section>
<!-- Reviews End -->

<section id="your-ideas" class="your-ideas position-relative">
    <div class="container">
        <div class="form-contain bg-white m-aut position-absolute">
            <h3 class="text-center" data-aos="fade-up" data-aos-delay="100" data-aos-once="true">
                <span>Место для Ваших идей</span>
            </h3>

            <div class="row">
                <div class="col-sm-12">
                    <?= $this->render('_contact_form') ?>
                </div>
            </div>
        </div>

    </div>
</section>


<!-- End Contact  -->

<!-- Start Footer -->
<section class="footer bg-fonn-home">
    <?= $this->render('_footer') ?>
</section>
<!-- End Footer  -->

