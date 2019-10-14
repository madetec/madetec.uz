<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */
use yii\helpers\Html;
$this->title = $name;
?>
<div class="content-wrapper">
    <section class="error-404">
        <div class="container">
            <h2><?= Html::encode($this->title) ?></h2>
            <p><?= nl2br(Html::encode($message)) ?></p>
            <a class="btn yellow medium" href="/">На главную</a>
        </div>
    </section>
</div>
