<?php

/** @var $news \madetec\crm\entities\News[] */

use yii\helpers\Url;

?>


<section class="portfolio-section v1">
    <div class="container-fluid">
        <div class="section-header">
            <h3>Новости компании</h3>
        </div>
        <div class="row">
            <?php foreach ($news as $item): ?>
                <div class="col-md-3 col-xs-12">
                    <div class="portfolio-box">
                        <div class="cover">
                            <a href="<?= Url::to(['news/view', 'slug' => $item->slug]) ?>">
                                <img
                                        style="-webkit-filter: brightness(0.50);filter: brightness(0.50);"
                                        src="<?= $item->mainPhoto ? $item->mainPhoto->getThumbFileUrl('file', 'preview') : null; ?>"
                                        alt="<?= $item->title ?>">
                            </a>
                            <h6 class="title"><?= $item->title ?></h6>
                            <ul class="categories clean-list">
                                <li><?= Yii::$app->formatter->asDate($item->published_at, 'full') ?></li>
                            </ul>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            <div class="col-md-12 col-xs-12">
                <div class="section-header button">
                    <h1>Cоздадим нечто великолепное вместе</h1>
                    <p>Свяжитесь с нами или отправьте нам вашу контактную информацию</p>
                    <a href="<?= Url::to(['site/contact']) ?>" class="btn yellow medium dark-hover">Связаться с GECO</a>
                </div>
            </div>

        </div>
</section>