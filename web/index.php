<?php

// comment out the following two lines when deployed to production
defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'dev');

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../vendor/yiisoft/yii2/Yii.php';

$app = require __DIR__ . '/../config/web.php';

$admin = require __DIR__ . '/../vendor/madetec/crm/config/main.php';

$config = \yii\helpers\ArrayHelper::merge($app, $admin);

(new yii\web\Application($config))->run();
