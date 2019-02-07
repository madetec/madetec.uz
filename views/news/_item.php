<?php
/** @var $model \madetec\crm\entities\News */

use yii\helpers\Html;
use yii\helpers\Url;

?>

<div class="blog-post">
    <div class="item-cover">
        <?= Html::beginTag('a', ['href' => Url::to(['news/view', 'slug' => $model->slug])]) ?>
        <?= $model->mainPhoto ? Html::img($model->mainPhoto->getThumbFileUrl('file', 'index'), ['alt' => $model->title]) : null; ?>
        <?= Html::endTag('a') ?>
    </div>
    <h2 class="post-title">
        <?= Html::a($model->title,Url::to(['news/view', 'slug' => $model->slug])) ?>
    </h2>
    <ul class="post-meta clean-list">
        <li><?= Yii::$app->formatter->asDate($model->published_at, 'full') ?></li>
    </ul>
    <p class="description"><?= $model->description ?></p>
    <a class="btn grey" href="<?= Url::to(['news/view', 'slug' => $model->slug]) ?>">Узнать больше</a>
</div>
