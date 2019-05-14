<?php

/** @var $news \madetec\crm\entities\News[] */

use yii\helpers\Url;

?>
<!-- Start Blog -->
<section id="blog" class="blog bg-main" data-scroll-index="5">
    <div class="container">
        <h4 class="min-title text-center" data-aos="fade-up" data-aos-delay="300" data-aos-once="true">Какие-то
            статьи</h4>
        <h3 class="text-center" data-aos="fade-up" data-aos-delay="100" data-aos-once="true"><span> Актуальная подборка материалов для Вас</span>
        </h3>
        <div class="line"></div>
        <div class="row">
            <?php foreach ($news

                           as $item): ?>
                <div class="col-lg-4">
                    <div class="item mmt-20">
                        <div class="post-img">
                            <div class="img">
                                <img src="<?= $item->mainPhoto ? $item->mainPhoto->getThumbFileUrl('file', 'index') : null; ?>"
                                     alt="<?= $item->title ?>">

                            </div>
                        </div>
                        <div class="cont">
                            <div class="info">
                                <a href="#0"><?= Yii::$app->formatter->asDate($item->published_at, 'php:d M Y') ?></a>

                            </div>
                            <h6>
                                <a href="<?= Url::to(['news/view', 'slug' => $item->slug]) ?>">
                                    <?= $item->title ?>
                                </a>
                            </h6>
                            <p><?= $item->description ?></p>
                        </div>
                    </div>
                </div>

            <?php endforeach; ?>


        </div>
    </div>
</section>


