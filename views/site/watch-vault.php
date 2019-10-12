<?php

/* @var $this yii\web\View */
use yii\helpers\Url;

$this->title = 'Madetec Solution | Digital';

?>


<!-- Start Header -->
<header class="valign header" data-color="#021975">

    <div class="bg-main-container bg-wv">
        <div class="head-block-home container">
            <div class="row main-head-content">
                <div class="col-md-6 offset-md-1 pt-30" data-aos="fade-left" data-aos-once="true" style="margin-left:4%;">
                    <div class="logo-head logo-head-wv">
                        <div class="logo-pic"><img src="\img\new-img\logo\WV-logo.webp"></div>
                    	<span class="text-logo-head pt-10">Добро пожаловать в безграничный мир часов</span>
                    </div>
                   
             
                    <a class="btn-pusk btn-link row">скачать</a>
                </div>

            </div>
        </div>
    </div>
    <div class="col-md-6 contain-rgt-display-img digital-img" data-aos="fade-right"  data-aos-once="true">
        <div class="pic-wv">
            <img src="\img\new-img\head-container-img\WV1.webp" alt="">
        </div>
    </div>
</header>
<!-- End Header==== -->


<!-- WV-descript Start -->
<section id="wv-descript" class="wv-descript" data-scroll-index="3">
    
    <div class="container">
        <div class="descript-top-block blck-wv-descript row">
            <div class="left-blck img-wv col-md-6">
                <img src="\img\new-img\picter\WV2.webp" class="img-contain">
            </div>
            <div class="right-blck text-wv col-md-6">
                <h2>Watch Vault</h2>
                <div class="wv-descript-text">
                    <p>Приложение, призванное объединить всех поклонников, коллекционеров и производителей наручных часов.</p>
                    <p>Данный программный продукт является уникальным в своем роде и не имеет аналогов в сегменте наручных часов и на рынке в целом. Приложение представляет собой симбиоз торговой площадки, социальной сети и незаменимого помощника в вопросах проверки подлинности и поиска утерянных изделий.</p>
                </div>
            </div>
        </div>

        <div class="descript-mid-block blck-wv-descript row">
            <div class="right-blck text-wv col-md-6">
                <h2 class="text-uppercase">Vault and Market</h2>
                <div class="wv-descript-text">
                    <p class="text-right">Пользователям приложения открыта возможность вносить свои приобретения и информацию о них в собственную электронную коллекцию часов, чтобы никогда не потерять нужные данные и в случае утери или кражи часов, легко найти их через пользователей приложения. Коллекции полностью приватны до тех пор, пока Вы сами не решите поделиться ими с остальным миром. Также в приложении есть возможность приобретать как новые часы напрямую у производителей и представителей брендов, так и редкие экземпляры у коллекционеров. Функция продажи экземпляров из своих коллекций доступна в двух вариациях: по фиксированной цене или с помощью аукциона.</p>
                    
                </div>
            </div>
            <div class="left-blck img-wv col-md-6" style="height:400px;">
                <img src="\img\new-img\picter\watch-v-image.webp" class="img-cover">
            </div>
            
        </div>

        <div class="descript-bot-block blck-wv-descript row">
            <div class="left-blck img-wv col-md-6">
                <img src="\img\new-img\picter\WV4.webp" class="img-contain">
            </div>
            <div class="right-blck text-wv col-md-6">
                <h2 class="text-uppercase">Socialize</h2>
                <div class="wv-descript-text">
                    <p>Предлагает полностью погрузиться в мир наручных часов и взаимодействовать с его поклонниками. Можно не только узнавать о коллекциях знаменитых людей и новостях брендов, но и собирать собственную аудиторию, демонстрируя свои приобретения и публикуя интересные материалы.</p>
                    
                </div>

                <h2 class="text-uppercase">Watch Recognizer</h2>
                <div class="wv-descript-text">
                    <p>Позволяет проверить на подлинность уже имеющиеся у Вас или выставленные на продажу часы простым наведением на них камеры или вводом серийного номера.</p> 
                </div>
            </div>
        </div>
        

    </div>
    <a href="<?= Url::to(['/site/project']) ?>" class="btn-link btn-portfolio-view" id="show-more-project"><span class="link-wrap"><p>Скачать</p></span></a>
</section>



<!-- Start Footer -->
<section class="footer bg-wv">
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

