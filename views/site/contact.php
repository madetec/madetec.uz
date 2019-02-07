<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Контакты';
$this->params['breadcrumbs'][] = $this->title;
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
                                    <img src="img/contact-page-bg.jpg" alt="slide1" data-bgfit="cover" data-bgposition="center center" data-kenburns="on" data-duration="7000" data-ease="Linear.easeNone" data-scalestart="110" data-scaleend="100" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="10" class="rev-slidebg" data-no-retina>

                                    <div class="tp-caption WhiteTtl tp-resizeme"
                                         data-x="center" data-hoffset="0"
                                         data-y="middle" data-voffset="0"
                                         data-whitespace="nowrap"
                                         data-transform_idle="o:1;"
                                         data-transform_in="y:-150px;opacity:0;s:1000;e:Power4.easeOut;"
                                         data-transform_out="opacity:0;s:500;s:500;"
                                         data-start="1300"
                                         data-responsive_offset="on">Свяжитесь с нами
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact-section v2">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-content">
                    <?= \app\widgets\Alert::widget() ?>
                    <?php $form = ActiveForm::begin([
                            'options' => ['class' => 'respond-form'],
                        'fieldConfig' => [
                            'template' => '<div class="input-line">{input}{error}</div>',
                            'labelOptions' => ['class' => false]
                        ]
                    ]) ?>
                    <h6>Напишите нам</h6>
                    <?= $form->field($model,'name')->textInput(['placeholder' => 'Имя'])->label(false); ?>
                    <?= $form->field($model,'phone')->textInput(['placeholder' => 'Телефон'])->label(false); ?>
                    <?= $form->field($model,'email')->textInput(['placeholder' => 'Эл.почта'])->label(false); ?>
                    <?= $form->field($model,'body')->textarea(['placeholder' => 'Текст'])->label(false); ?>
                    <?= $form->field($model, 'verifyCode')->widget(Captcha::class) ?>
                    <button class="form-send btn yellow dark-hover" type="submit">отправить</button>
                    <?php ActiveForm::end(); ?>


                </div>

                <div class="col-md-3 col-sidebar">
                    <div class="sidebar">
                        <div class="row isotope">
                            <div class="col-md-12 col-sm-6 col-xs-12 isotope-item">
                                <div class="widget widget_contact">
                                    <h4 class="widget-title">Контактная информация</h4>
                                    <div class="widget-body">
                                        <ul class="contact-info clean-list">
                                            <li>
                                                <span class="title">Адрес:</span>
                                                <p>4 Осиё, Юнусабадский р-он</p>
                                                <p>Ташкент 100017 Узбекистан</p>
                                            </li>
                                            <li>
                                                <span class="title">Телефон:</span>
                                                <p>+99 (895) 169 26 26 - Офис</p>
                                            </li>
                                            <li>
                                                <span class="title">Email:</span>
                                                <p><a href="mailto:info@geco.uz">info@geco.uz</a></p>
                                            </li>
                                            <li>
                                                <span class="title">Мы есть в:</span>
                                                <?= \app\widgets\SocialWidgets::widget(['classes' => ['clean-list']]) ?>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2996.1537594360593!2d69.28475571138537!3d41.327269742598006!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x57934e77519c9!2sGECO+innovations!5e0!3m2!1sru!2s!4v1548142024827" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>