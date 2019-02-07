<?php

/* @var $this yii\web\View */
/* @var $provider \yii\data\ActiveDataProvider */

use yii\widgets\ListView;

$this->title = 'Лента новостей';
?>
<div class="content-wrapper">
    <section class="hero-section">
        <h2 class="hidden">Slider Section</h2>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="rev_slider_wrapper">
                        <div class="fullwidth_slider rev_slider" data-arrows="false" data-height="750">
                            <ul>
                                <li data-transition="fade">
                                    <img src="/img/news-background.jpg" alt="slide1" data-bgfit="cover"
                                         data-bgposition="center center" data-kenburns="on" data-duration="7000"
                                         data-ease="Linear.easeNone" data-scalestart="110" data-scaleend="100"
                                         data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0"
                                         data-offsetend="0 0" data-bgparallax="10" class="rev-slidebg" data-no-retina>

                                    <div class="tp-caption WhiteTtl tp-resizeme"
                                         data-x="center" data-hoffset="0"
                                         data-y="middle" data-voffset="-32"
                                         data-whitespace="nowrap"
                                         data-transform_idle="o:1;"
                                         data-transform_in="y:-150px;opacity:0;s:1000;e:Power4.easeOut;"
                                         data-transform_out="opacity:0;s:500;s:500;"
                                         data-start="1300"
                                         data-responsive_offset="on">Лента новостей
                                    </div>

                                    <div class="tp-caption WhiteTtlp tp-resizeme"
                                         data-x="center" data-hoffset="0"
                                         data-y="middle" data-voffset="32"
                                         data-whitespace="nowrap"
                                         data-transform_idle="o:1;"
                                         data-transform_in="y:-100px;opacity:0;s:1000;e:Power2.easeOut;"
                                         data-transform_out="opacity:0;s:500;s:500;"
                                         data-start="1700"
                                         data-responsive_offset="on">
                                        Тут вы можете ознакомиться с последними тенденциями <br>
                                        в области строительства и дизайна. А также с новостями нашей компании.
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="team-members-section clean">
        <div class="container">
        </div>
    </section>
    <section class="content-section">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-content">

                        <?= ListView::widget([
                            'dataProvider' => $provider,
                            'itemView' => '_item',
                            'layout' => "<div class=\"blog-posts-list\">{items}</div>{pager}",
                            'pager' => [
                                'prevPageLabel' => 'назад',
                                'nextPageLabel' => 'вперед',

                                'options' => [
                                    'tag' => 'ul',
                                    'class' => 'page-numbers',
                                    'id' => false,
                                ],
                                'prevPageCssClass' => 'prev',
                                'nextPageCssClass' => 'next',
                                'activePageCssClass' => 'current',
                                'linkOptions' => ['class' => 'page-numbers']
                            ],

                        ]); ?>
                </div>
            </div>
        </div>
    </section>
</div>