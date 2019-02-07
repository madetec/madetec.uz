<?php

/** @var $news \madetec\crm\entities\News[] */

use yii\helpers\Url;

?>
<div class="col-md-6 col-sm-6 col-xs-12 isotope-item">
    <div class="widget widget_recent_posts">
        <h4 class="widget-title">Последние новости</h4>
        <div class="widget-body">
            <ul class="recent-posts clean-list">
                <?php foreach ($news as $item): ?>
                <li>
                    <h4>
                        <img src="<?= $item->mainPhoto ? $item->mainPhoto->getThumbFileUrl('file','admin') : null; ?>" alt="">
                        <a href="<?= Url::to(['news/view', 'slug' => $item->slug]) ?>" style="position: absolute; margin-left: 5px;">
                            <?= $item->title ?>
                            <ul class="post-meta">
                                <li style="color: #919499;"><?= Yii::$app->formatter->asDate($item->published_at, 'full') ?></li>
                            </ul>
                        </a>

                    </h4>

                </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>