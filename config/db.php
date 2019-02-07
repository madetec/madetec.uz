<?php

if ($_SERVER['SERVER_NAME'] != 'madetec.test') {
    $db = [
        'dsn' => 'mysql:host=localhost;dbname=madetec',
        'username' => 'madetec',
        'password' => 'Vikqab-zajpeg-jyzno5',
    ];
} else {
    $db = [
        'dsn' => 'mysql:host=localhost;dbname=madetec',
        'username' => 'root',
        'password' => '',
    ];
}

$settings = [
    'class' => 'yii\db\Connection',
    'charset' => 'utf8mb4',

    // Schema cache options (for production environment)
    'enableSchemaCache' => true,
    'schemaCacheDuration' => 60,
    'schemaCache' => 'cache',
];

return \yii\helpers\ArrayHelper::merge($settings, $db);
