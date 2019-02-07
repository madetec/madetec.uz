<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Наши объекты';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="content-wrapper">
    <section class="hero-section">
        <h2 class="hidden">Slider Section</h2>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="rev_slider_wrapper">
                        <div class="fullwidth_slider rev_slider" data-type="hero" data-height="750">
                            <ul>
                                <li data-transition="fade">
                                    <img src="img/object_site/bg.jpg" alt="slide1" data-bgfit="cover" data-bgposition="center center" data-kenburns="on" data-duration="7000" data-ease="Linear.easeNone" data-scalestart="110" data-scaleend="100" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="10" class="rev-slidebg" data-no-retina>

                                    <div class="tp-caption WhiteTtl px40 tp-resizeme"
                                         data-x="center" data-hoffset="0"
                                         data-y="middle" data-voffset="-25"
                                         data-whitespace="nowrap"
                                         data-transform_idle="o:1;"
                                         data-transform_in="y:-100px;opacity:0;s:1000;e:Power4.easeOut;"
                                         data-transform_out="opacity:0;s:500;s:500;"
                                         data-start="1300"
                                         data-responsive_offset="on">Наши проекты
                                    </div>

                                    <div class="tp-caption WhiteTtlp"
                                         data-x="center" data-hoffset="0"
                                         data-y="middle" data-voffset="25"
                                         data-transform_idle="o:1;"
                                         data-transform_in="y:70px;opacity:0;s:1000;e:Power4.easeOut;"
                                         data-transform_out="opacity:0;s:500;s:500;"
                                         data-start="1600" >Здесь вы можете ознакомиться с выполнеными объектами
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="portfolio-section masonry">
        <div class="isot-filters">
            <ul class="clean-list">
                <li><a data-filter="*" href="#">Все</a></li>
                <li><a class="current" data-filter=".buildings" href="#">Экстерьер</a></li>
                <li><a data-filter=".interior" href="#">Интерьер</a></li>
                <li><a data-filter=".bathroom" href="#">Ванная</a></li>
                <li><a data-filter=".kitchen" href="#">Кухня</a></li>
                <li><a data-filter=".restaurants" href="#">Рестораны</a></li>
                <li><a data-filter=".stores" href="#">Магазины</a></li>
                <li><a data-filter=".termoplintus" href="#">Термоплинтус</a></li>
                <li><a data-filter=".vallox" href="#">Вентиляция</a></li>
            </ul>
        </div>

        <div class="isot-projects-wrapper" data-default-selection="*">
            <div class="container">
                <div class="row isotope">

                    <div class="col-md-3 col-xs-6 isotope-item buildings">
                        <div class="portfolio-box-circle masonry">
                            <div class="image">
                                <a href="img/object_site/exterior/ext-1-1.jpg" class="view-link photozoom">
                                    <img src="img/object_site/exterior/ext-1.jpg" alt="portfolio box">
                                </a>
                            </div>
                            <h6 class="title">Здание</h6>
                            <ul class="categories clean-list">
                                <li><a href="#">Construction</a></li>
                                <li><a href="#">Interior Design</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-3 col-xs-6 isotope-item buildings">
                        <div class="portfolio-box-circle masonry">
                            <div class="image">
                                <a href="img/object_site/exterior/ext-2-1.jpg" class="view-link photozoom">
                                    <img src="img/object_site/exterior/ext-2.jpg" alt="portfolio box">
                                </a>
                            </div>
                            <h6 class="title">Здание</h6>
                            <ul class="categories clean-list">
                                <li><a href="#">Construction</a></li>
                                <li><a href="#">Interior Design</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-3 col-xs-6 isotope-item buildings">
                        <div class="portfolio-box-circle masonry">
                            <div class="image">
                                <a href="img/object_site/exterior/ext-3-1.jpg" class="view-link photozoom">
                                    <img src="img/object_site/exterior/ext-3.jpg" alt="portfolio box">
                                </a>
                            </div>
                            <h6 class="title">Здание</h6>
                            <ul class="categories clean-list">
                                <li><a href="#">Construction</a></li>
                                <li><a href="#">Interior Design</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-3 col-xs-6 isotope-item buildings">
                        <div class="portfolio-box-circle masonry">
                            <div class="image">
                                <a href="img/object_site/exterior/ext-4-1.jpg" class="view-link photozoom">
                                    <img src="img/object_site/exterior/ext-4.jpg" alt="portfolio box">
                                </a>
                            </div>
                            <h6 class="title">Здание</h6>
                            <ul class="categories clean-list">
                                <li><a href="#">Construction</a></li>
                                <li><a href="#">Interior Design</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-3 col-xs-6 isotope-item buildings">
                        <div class="portfolio-box-circle masonry">
                            <div class="image">
                                <a href="img/object_site/exterior/ext-5-1.jpg" class="view-link photozoom">
                                    <img src="img/object_site/exterior/ext-5.jpg" alt="portfolio box">
                                </a>
                            </div>
                            <h6 class="title">Здание</h6>
                            <ul class="categories clean-list">
                                <li><a href="#">Construction</a></li>
                                <li><a href="#">Interior Design</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-3 col-xs-6 isotope-item buildings">
                        <div class="portfolio-box-circle masonry">
                            <div class="image">
                                <a href="img/object_site/exterior/ext-6-1.jpg" class="view-link photozoom">
                                    <img src="img/object_site/exterior/ext-6.jpg" alt="portfolio box">
                                </a>
                            </div>
                            <h6 class="title">Здание</h6>
                            <ul class="categories clean-list">
                                <li><a href="#">Construction</a></li>
                                <li><a href="#">Interior Design</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-3 col-xs-6 isotope-item buildings">
                        <div class="portfolio-box-circle masonry">
                            <div class="image">
                                <a href="img/object_site/exterior/ext-7-1.jpg" class="view-link photozoom">
                                    <img src="img/object_site/exterior/ext-7.jpg" alt="portfolio box">
                                </a>
                            </div>
                            <h6 class="title">Здание</h6>
                            <ul class="categories clean-list">
                                <li><a href="#">Construction</a></li>
                                <li><a href="#">Interior Design</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-3 col-xs-6 isotope-item buildings">
                        <div class="portfolio-box-circle masonry">
                            <div class="image">
                                <a href="img/object_site/exterior/ext-8-1.jpg" class="view-link photozoom">
                                    <img src="img/object_site/exterior/ext-8.jpg" alt="portfolio box">
                                </a>
                            </div>
                            <h6 class="title">Здание</h6>
                            <ul class="categories clean-list">
                                <li><a href="#">Construction</a></li>
                                <li><a href="#">Interior Design</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-3 col-xs-6 isotope-item buildings">
                        <div class="portfolio-box-circle masonry">
                            <div class="image">
                                <a href="img/object_site/exterior/ext-9-1.jpg" class="view-link photozoom">
                                    <img src="img/object_site/exterior/ext-9.jpg" alt="portfolio box">
                                </a>
                            </div>
                            <h6 class="title">Здание</h6>
                            <ul class="categories clean-list">
                                <li><a href="#">Construction</a></li>
                                <li><a href="#">Interior Design</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-3 col-xs-6 isotope-item bathroom">
                        <div class="portfolio-box-circle masonry">
                            <div class="image">
                                <a href="img/object_site/bathroom/bath-1-1.jpg" class="view-link photozoom">
                                    <img src="img/object_site/bathroom/bath-1.jpg" alt="portfolio box">
                                </a>
                            </div>
                            <h6 class="title">Ванная</h6>
                            <ul class="categories clean-list">
                                <li><a href="#">Construction</a></li>
                                <li><a href="#">Interior Design</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-xs-6 isotope-item bathroom">
                        <div class="portfolio-box-circle masonry">
                            <div class="image">
                                <a href="img/object_site/bathroom/bath-2-2.jpg" class="view-link photozoom">
                                    <img src="img/object_site/bathroom/bath-2.jpg" alt="portfolio box">
                                </a>
                            </div>
                            <h6 class="title">Ванная</h6>
                            <ul class="categories clean-list">
                                <li><a href="#">Construction</a></li>
                                <li><a href="#">Interior Design</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-xs-6 isotope-item bathroom">
                        <div class="portfolio-box-circle masonry">
                            <div class="image">
                                <a href="img/object_site/bathroom/bath-3-3.jpg" class="view-link photozoom">
                                    <img src="img/object_site/bathroom/bath-3.jpg" alt="portfolio box">
                                </a>
                            </div>
                            <h6 class="title">Ванная</h6>
                            <ul class="categories clean-list">
                                <li><a href="#">Construction</a></li>
                                <li><a href="#">Interior Design</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-xs-6 isotope-item bathroom">
                        <div class="portfolio-box-circle masonry">
                            <div class="image">
                                <a href="img/object_site/bathroom/bath-4-4.jpg" class="view-link photozoom">
                                    <img src="img/object_site/bathroom/bath-4.jpg" alt="portfolio box">
                                </a>
                            </div>
                            <h6 class="title">Ванная</h6>
                            <ul class="categories clean-list">
                                <li><a href="#">Construction</a></li>
                                <li><a href="#">Interior Design</a></li>
                            </ul>
                        </div>
                    </div>


                    <div class="col-md-3 col-xs-6 isotope-item interior">
                        <div class="portfolio-box-circle masonry">
                            <div class="image">
                                <a href="img/object_site/interior/int-1-1.jpg" class="view-link photozoom">
                                    <img src="img/object_site/interior/int-1.jpg" alt="portfolio box">
                                </a>
                            </div>
                            <h6 class="title">Интерьер</h6>
                            <ul class="categories clean-list">
                                <li><a href="#">Construction</a></li>
                                <li><a href="#">Interior Design</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-3 col-xs-6 isotope-item interior">
                        <div class="portfolio-box-circle masonry">
                            <div class="image">
                                <a href="img/object_site/interior/int-2-1.jpg" class="view-link photozoom">
                                    <img src="img/object_site/interior/int-2.jpg" alt="portfolio box">
                                </a>
                            </div>
                            <h6 class="title">Интерьер</h6>
                            <ul class="categories clean-list">
                                <li><a href="#">Construction</a></li>
                                <li><a href="#">Interior Design</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-3 col-xs-6 isotope-item interior">
                        <div class="portfolio-box-circle masonry">
                            <div class="image">
                                <a href="img/object_site/interior/int-3-1.jpg" class="view-link photozoom">
                                    <img src="img/object_site/interior/int-3.jpg" alt="portfolio box">
                                </a>
                            </div>
                            <h6 class="title">Интерьер</h6>
                            <ul class="categories clean-list">
                                <li><a href="#">Construction</a></li>
                                <li><a href="#">Interior Design</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-3 col-xs-6 isotope-item interior">
                        <div class="portfolio-box-circle masonry">
                            <div class="image">
                                <a href="img/object_site/interior/int-4-1.jpg" class="view-link photozoom">
                                    <img src="img/object_site/interior/int-4.jpg" alt="portfolio box">
                                </a>
                            </div>
                            <h6 class="title">Интерьер</h6>
                            <ul class="categories clean-list">
                                <li><a href="#">Construction</a></li>
                                <li><a href="#">Interior Design</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-3 col-xs-6 isotope-item interior">
                        <div class="portfolio-box-circle masonry">
                            <div class="image">
                                <a href="img/object_site/interior/int-5-1.jpg" class="view-link photozoom">
                                    <img src="img/object_site/interior/int-5.jpg" alt="portfolio box">
                                </a>
                            </div>
                            <h6 class="title">Интерьер</h6>
                            <ul class="categories clean-list">
                                <li><a href="#">Construction</a></li>
                                <li><a href="#">Interior Design</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-3 col-xs-6 isotope-item interior">
                        <div class="portfolio-box-circle masonry">
                            <div class="image">
                                <a href="img/object_site/interior/int-6-1.jpg" class="view-link photozoom">
                                    <img src="img/object_site/interior/int-6.jpg" alt="portfolio box">
                                </a>
                            </div>
                            <h6 class="title">Интерьер</h6>
                            <ul class="categories clean-list">
                                <li><a href="#">Construction</a></li>
                                <li><a href="#">Interior Design</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-3 col-xs-6 isotope-item interior">
                        <div class="portfolio-box-circle masonry">
                            <div class="image">
                                <a href="img/object_site/interior/int-7-1.jpg" class="view-link photozoom">
                                    <img src="img/object_site/interior/int-7.jpg" alt="portfolio box">
                                </a>
                            </div>
                            <h6 class="title">Интерьер</h6>
                            <ul class="categories clean-list">
                                <li><a href="#">Construction</a></li>
                                <li><a href="#">Interior Design</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-3 col-xs-6 isotope-item interior">
                        <div class="portfolio-box-circle masonry">
                            <div class="image">
                                <a href="img/object_site/interior/int-8-1.jpg" class="view-link photozoom">
                                    <img src="img/object_site/interior/int-8.jpg" alt="portfolio box">
                                </a>
                            </div>
                            <h6 class="title">Интерьер</h6>
                            <ul class="categories clean-list">
                                <li><a href="#">Construction</a></li>
                                <li><a href="#">Interior Design</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-3 col-xs-6 isotope-item interior">
                        <div class="portfolio-box-circle masonry">
                            <div class="image">
                                <a href="img/object_site/interior/int-9-1.jpg" class="view-link photozoom">
                                    <img src="img/object_site/interior/int-9.jpg" alt="portfolio box">
                                </a>
                            </div>
                            <h6 class="title">Интерьер</h6>
                            <ul class="categories clean-list">
                                <li><a href="#">Construction</a></li>
                                <li><a href="#">Interior Design</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-3 col-xs-6 isotope-item interior">
                        <div class="portfolio-box-circle masonry">
                            <div class="image">
                                <a href="img/object_site/interior/int-10-1.jpg" class="view-link photozoom">
                                    <img src="img/object_site/interior/int-10.jpg" alt="portfolio box">
                                </a>
                            </div>
                            <h6 class="title">Интерьер</h6>
                            <ul class="categories clean-list">
                                <li><a href="#">Construction</a></li>
                                <li><a href="#">Interior Design</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-3 col-xs-6 isotope-item interior">
                        <div class="portfolio-box-circle masonry">
                            <div class="image">
                                <a href="img/object_site/interior/int-11-1.jpg" class="view-link photozoom">
                                    <img src="img/object_site/interior/int-11.jpg" alt="portfolio box">
                                </a>
                            </div>
                            <h6 class="title">Интерьер</h6>
                            <ul class="categories clean-list">
                                <li><a href="#">Construction</a></li>
                                <li><a href="#">Interior Design</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-3 col-xs-6 isotope-item stores">
                        <div class="portfolio-box-circle masonry">
                            <div class="image">
                                <a href="img/object_site/stores/store-1-1.jpg" class="view-link photozoom">
                                    <img src="img/object_site/stores/store-1.jpg" alt="portfolio box">
                                </a>
                            </div>
                            <h6 class="title">Магазин</h6>
                            <ul class="categories clean-list">
                                <li><a href="#">Construction</a></li>
                                <li><a href="#">Interior Design</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-3 col-xs-6 isotope-item stores">
                        <div class="portfolio-box-circle masonry">
                            <div class="image">
                                <a href="img/object_site/stores/store-2-1.jpg" class="view-link photozoom">
                                    <img src="img/object_site/stores/store-2.jpg" alt="portfolio box">
                                </a>
                            </div>
                            <h6 class="title">Магазин</h6>
                            <ul class="categories clean-list">
                                <li><a href="#">Construction</a></li>
                                <li><a href="#">Interior Design</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-3 col-xs-6 isotope-item stores">
                        <div class="portfolio-box-circle masonry">
                            <div class="image">
                                <a href="img/object_site/stores/store-3-1.jpg" class="view-link photozoom">
                                    <img src="img/object_site/stores/store-3.jpg" alt="portfolio box">
                                </a>
                            </div>
                            <h6 class="title">Магазин</h6>
                            <ul class="categories clean-list">
                                <li><a href="#">Construction</a></li>
                                <li><a href="#">Interior Design</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-3 col-xs-6 isotope-item stores">
                        <div class="portfolio-box-circle masonry">
                            <div class="image">
                                <a href="img/object_site/stores/store-4-1.jpg" class="view-link photozoom">
                                    <img src="img/object_site/stores/store-4.jpg" alt="portfolio box">
                                </a>
                            </div>
                            <h6 class="title">Магазин</h6>
                            <ul class="categories clean-list">
                                <li><a href="#">Construction</a></li>
                                <li><a href="#">Interior Design</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-3 col-xs-6 isotope-item stores">
                        <div class="portfolio-box-circle masonry">
                            <div class="image">
                                <a href="img/object_site/stores/store-5-1.jpg" class="view-link photozoom">
                                    <img src="img/object_site/stores/store-5.jpg" alt="portfolio box">
                                </a>
                            </div>
                            <h6 class="title">Магазин</h6>
                            <ul class="categories clean-list">
                                <li><a href="#">Construction</a></li>
                                <li><a href="#">Interior Design</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-3 col-xs-6 isotope-item kitchen">
                        <div class="portfolio-box-circle masonry">
                            <div class="image">
                                <a href="img/object_site/kitchen/kitchen-1-1.jpg" class="view-link photozoom">
                                    <img src="img/object_site/kitchen/kitchen-1.jpg" alt="portfolio box">
                                </a>
                            </div>
                            <h6 class="title">Кухня</h6>
                            <ul class="categories clean-list">
                                <li><a href="#">Construction</a></li>
                                <li><a href="#">Interior Design</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-3 col-xs-6 isotope-item kitchen">
                        <div class="portfolio-box-circle masonry">
                            <div class="image">
                                <a href="img/object_site/kitchen/kitchen-2-1.jpg" class="view-link photozoom">
                                    <img src="img/object_site/kitchen/kitchen-2.jpg" alt="portfolio box">
                                </a>
                            </div>
                            <h6 class="title">Кухня</h6>
                            <ul class="categories clean-list">
                                <li><a href="#">Construction</a></li>
                                <li><a href="#">Interior Design</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-3 col-xs-6 isotope-item kitchen">
                        <div class="portfolio-box-circle masonry">
                            <div class="image">
                                <a href="img/object_site/kitchen/kitchen-3-1.jpg" class="view-link photozoom">
                                    <img src="img/object_site/kitchen/kitchen-3.jpg" alt="portfolio box">
                                </a>
                            </div>
                            <h6 class="title">Кухня</h6>
                            <ul class="categories clean-list">
                                <li><a href="#">Construction</a></li>
                                <li><a href="#">Interior Design</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-3 col-xs-6 isotope-item restaurants">
                        <div class="portfolio-box-circle masonry">
                            <div class="image">
                                <a href="img/object_site/restaurants/rest-1-1.jpg" class="view-link photozoom">
                                    <img src="img/object_site/restaurants/rest-1.jpg" alt="portfolio box">
                                </a>
                            </div>
                            <h6 class="title">Ресторан</h6>
                            <ul class="categories clean-list">
                                <li><a href="#">Construction</a></li>
                                <li><a href="#">Interior Design</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-3 col-xs-6 isotope-item restaurants">
                        <div class="portfolio-box-circle masonry">
                            <div class="image">
                                <a href="img/object_site/restaurants/rest-2-1.jpg" class="view-link photozoom">
                                    <img src="img/object_site/restaurants/rest-2.jpg" alt="portfolio box">
                                </a>
                            </div>
                            <h6 class="title">Ресторан</h6>
                            <ul class="categories clean-list">
                                <li><a href="#">Construction</a></li>
                                <li><a href="#">Interior Design</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-3 col-xs-6 isotope-item restaurants">
                        <div class="portfolio-box-circle masonry">
                            <div class="image">
                                <a href="img/object_site/restaurants/rest-3-1.jpg" class="view-link photozoom">
                                    <img src="img/object_site/restaurants/rest-3.jpg" alt="portfolio box">
                                </a>
                            </div>
                            <h6 class="title">Ресторан</h6>
                            <ul class="categories clean-list">
                                <li><a href="#">Construction</a></li>
                                <li><a href="#">Interior Design</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-3 col-xs-6 isotope-item restaurants">
                        <div class="portfolio-box-circle masonry">
                            <div class="image">
                                <a href="img/object_site/restaurants/rest-4-1.jpg" class="view-link photozoom">
                                    <img src="img/object_site/restaurants/rest-4.jpg" alt="portfolio box">
                                </a>
                            </div>
                            <h6 class="title">Ресторан</h6>
                            <ul class="categories clean-list">
                                <li><a href="#">Construction</a></li>
                                <li><a href="#">Interior Design</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-3 col-xs-6 isotope-item restaurants">
                        <div class="portfolio-box-circle masonry">
                            <div class="image">
                                <a href="img/object_site/restaurants/rest-5-1.jpg" class="view-link photozoom">
                                    <img src="img/object_site/restaurants/rest-5.jpg" alt="portfolio box">
                                </a>
                            </div>
                            <h6 class="title">Ресторан</h6>
                            <ul class="categories clean-list">
                                <li><a href="#">Construction</a></li>
                                <li><a href="#">Interior Design</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-3 col-xs-6 isotope-item restaurants">
                        <div class="portfolio-box-circle masonry">
                            <div class="image">
                                <a href="img/object_site/restaurants/rest-6-1.jpg" class="view-link photozoom">
                                    <img src="img/object_site/restaurants/rest-6.jpg" alt="portfolio box">
                                </a>
                            </div>
                            <h6 class="title">Ресторан</h6>
                            <ul class="categories clean-list">
                                <li><a href="#">Construction</a></li>
                                <li><a href="#">Interior Design</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-3 col-xs-6 isotope-item restaurants">
                        <div class="portfolio-box-circle masonry">
                            <div class="image">
                                <a href="img/object_site/restaurants/rest-7-1.jpg" class="view-link photozoom">
                                    <img src="img/object_site/restaurants/rest-7.jpg" alt="portfolio box">
                                </a>
                            </div>
                            <h6 class="title">Ресторан</h6>
                            <ul class="categories clean-list">
                                <li><a href="#">Construction</a></li>
                                <li><a href="#">Interior Design</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
<!--                <button class="view-more btn grey aligncenter">load more</button>-->
            </div>
        </div>
    </section>
</div>