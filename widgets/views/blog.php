<?php

/** @var $news \madetec\crm\entities\News[] */

use yii\helpers\Url;

?>
<section class="blog-section">
    <div class="container">
        <div class="section-header white">
            <h5 class="subtitle">Нашы новости</h5>
            <h2>ПОСЛЕДНИЕ ПУБЛИКАЦИИ</h2>
            <span><i></i></span>
            <p>В наших новостях мы собираем отборные материалы по темам архитектуры, дизайна и строительства, чтобы Вы
                знакомились с трендами, вдохновлялись и были в курсе передовых разработок.</p>
            <p>GECO Innovations – с заботой о Вашем чувстве прекрасного.</p>
        </div>
        <div class="row">
            <?php foreach ($news as $item): ?>
                <div class="col-md-4">
                    <div class="blog-post-item">
                        <img class="aligncenter" src="<?= $item->mainPhoto ? $item->mainPhoto->getThumbFileUrl('file', 'preview') : null; ?>" alt="blog item">
                        <h5 class="title"><a href="<?= Url::to(['news/view', 'slug' => $item->slug]) ?>"><?= $item->title ?></a>
                        </h5>
                        <ul class="post-meta clean-list">
                            <li><?= Yii::$app->formatter->asDate($item->published_at, 'full') ?></li>
                        </ul>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>