<?php
/**
 * Yii console bootstrap file.
 *
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

use yii\helpers\ArrayHelper;

defined('YII_DEBUG') or define('YII_DEBUG', false);
defined('YII_ENV') or define('YII_ENV', 'prod');


require __DIR__ . '../../vendor/autoload.php';
require __DIR__ . '../../vendor/yiisoft/yii2/Yii.php';

$app = require __DIR__ . '/../config/web.php';
$admin = require __DIR__ . '/../vendor/madetec/crm/config/main.php';

$config = ArrayHelper::merge($app, $admin);

(new yii\web\Application($config))->run();
