<?php

/** @var $news \madetec\crm\entities\News */
/** @var $this \yii\web\View */

$this->title = $news->title;

$this->registerMetaTag([
    'name' => 'description',
    'content' => $news->description
],'description');

$this->registerMetaTag([
    'name' => 'og:description',
    'content' => $news->description
],'og:description');

$this->registerMetaTag([
    'name' => 'og:description',
    'content' => $news->description
],'og:description');
if($news->mainPhoto){
    $this->registerMetaTag([
        'name' => 'og:image',
        'content' => $news->mainPhoto->getThumbFileUrl('file')
    ],'og:image');
}


?>


<section class="banner" style="background-image: url('<?= $news->mainPhoto ? $news->mainPhoto->getUploadedFileUrl('file') : null; ?>')">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">

                <h2 data-aos="fade-up" data-aos-delay="300" data-aos-once="true">Хотите, чтобы мы воплотили Ваши идеи в жизнь?</h2>
                <h4 data-aos="fade-up" data-aos-delay="100" data-aos-once="true">Поделитесь с нами задумкой и мы обязательно свяжемся с Вами в течение часа!</h4>
                <a href="#0" class="main-button mt-20" data-aos="fade-down" data-aos-delay="300" data-aos-once="true">
                    <span>Хочу!</span>
                </a>
            </div>
        </div>
    </div>
</section>

<div class="content-wrapper">
<!--    <section class="hero-section">-->
<!--        <div class="row">-->
<!--            <div class="col-sm-12">-->
<!--                <img src="--><?//= $news->mainPhoto ? $news->mainPhoto->getUploadedFileUrl('file') : null; ?><!--"-->
<!--                        style="width: 100%; height:300px; object-fit: cover; -webkit-filter:brightness(0.2) ;filter:brightness(0.2);">-->
<!--            </div>-->
<!--        </div>-->
<!--    </section>-->
    <section class="single-post-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-content">
                    <div class="blog-posts-list single">
                        <div class="blog-post">
                            <h2 class="post-title"><?= $news->title ?></h2>
                            <ul class="post-meta clean-list">
                                <li><?= Yii::$app->formatter->asDate($news->published_at, 'full') ?></li>
                            </ul>
                            <div class="entry">
                                <?= $news->text ?>
                                <?php if ($news->photos): ?>
                                    <div class="gallery clearfix">
                                        <?php foreach ($news->photos as $photo): ?>
                                            <div class="gallery-item">
                                                <div class="cover">
                                                    <img src="<?= $photo->getThumbFileUrl('file') ?>"
                                                         alt="gallery-item">
                                                    <a href="<?= $photo->getUploadedFileUrl('file') ?>"
                                                       class="view-link photozoom"></a>
                                                </div>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
</div>
