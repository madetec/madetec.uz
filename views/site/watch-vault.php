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
                        <div class="logo-pic">
                            <picture>
                                <source srcset="\img\new-img\small\logo\WV-logo.png" type="image/webp" media="(max-width: 600px)" class="img-cover">
                                <img src="\img\new-img\large\logo\WV-logo.png" alt="" class="img-cover">
                            </picture>
                        </div>
                    	<span class="text-logo-head pt-10">Добро пожаловать в безграничный мир часов</span>
                    </div>
                   
             
                    <a class="btn-link row col-md-3 text-center mt-20" style="margin-left:2px;">скачать</a>
                </div>

            </div>
        </div>
    </div>
    <div class="col-md-6 contain-rgt-display-img digital-img" data-aos="fade-right"  data-aos-once="true">
        <div class="pic-wv">
            <img src="\img\new-img\large\head-container-img\WV1.png" alt="" class="img-cover">
        </div>
    </div>
</header>
<!-- End Header==== -->


<!-- WV-descript Start -->
<section id="wv-descript" class="wv-descript" data-scroll-index="3">
    
    <div class="container">
        <div class="descript-top-block blck-wv-descript row">
            <div class="left-blck img-wv col-md-6" data-aos="fade-up" data-aos-once="true" data-aos-duration = "1000">
                <picture>
                    <source srcset="\img\new-img\small\picter\WV2.jpg" type="image/webp" media="(max-width: 600px)" class="img-contain">
                    <img src="\img\new-img\large\picter\WV2.jpg" alt="" class="img-contain">
                </picture>
            </div>
            <div class="right-blck text-wv col-md-6" data-aos="fade-down" data-aos-once="true" data-aos-duration = "1000">
                <h2>Watch Vault</h2>
                <div class="wv-descript-text">
                    <p>Приложение, призванное объединить всех поклонников, коллекционеров и производителей наручных часов.</p>
                    <p>Данный программный продукт является уникальным в своем роде и не имеет аналогов в сегменте наручных часов и на рынке в целом. Приложение представляет собой симбиоз торговой площадки, социальной сети и незаменимого помощника в вопросах проверки подлинности и поиска утерянных изделий.</p>
                </div>
            </div>
        </div>

        <div class="descript-mid-block blck-wv-descript row">
            <div class="right-blck text-wv col-md-6" data-aos="fade-up" data-aos-once="true" data-aos-duration = "1000">
                <h2 class="text-uppercase">Vault and Market</h2>
                <div class="wv-descript-text">
                    <p class="text-right">Пользователям приложения открыта возможность вносить свои приобретения и информацию о них в собственную электронную коллекцию часов, чтобы никогда не потерять нужные данные и в случае утери или кражи часов, легко найти их через пользователей приложения. Коллекции полностью приватны до тех пор, пока Вы сами не решите поделиться ими с остальным миром. Также в приложении есть возможность приобретать как новые часы напрямую у производителей и представителей брендов, так и редкие экземпляры у коллекционеров. Функция продажи экземпляров из своих коллекций доступна в двух вариациях: по фиксированной цене или с помощью аукциона.</p>
                    
                </div>
            </div>
            <div class="left-blck img-wv col-md-6" style="height:400px;" data-aos="fade-down" data-aos-once="true" data-aos-duration = "1000">
                <picture>
                    <source srcset="\img\new-img\small\picter\WV3.jpg" type="image/webp" media="(max-width: 600px)" class="img-cover">
                    <img src="\img\new-img\large\picter\WV3.jpg" alt="" class="img-cover">
                </picture>
            </div>
            
        </div>

        <div class="descript-bot-block blck-wv-descript row">
            <div class="left-blck img-wv col-md-6" data-aos="fade-up" data-aos-once="true" data-aos-duration = "1000">
                <picture>
                    <source srcset="\img\new-img\small\picter\WV4.jpg" type="image/webp" media="(max-width: 600px)" class="img-contain">
                    <img src="\img\new-img\large\picter\WV4.jpg" alt="" class="img-contain">
                </picture>
            </div>
            <div class="right-blck text-wv col-md-6" data-aos="fade-down" data-aos-once="true" data-aos-duration = "1000">
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
    <a href="<?= Url::to(['/site/project']) ?>" class="btn-link btn-portfolio-view text-center" id="show-more-project"><span class="link-wrap"><p>Скачать</p></span></a>
</section>



<!-- Start Footer -->
<section class="footer bg-wv">
    <?= $this->render('_footer') ?>
</section>
<!-- End Footer  -->





<!-- End Contact  -->

