<?php

$db = [
        'dsn' => 'mysql:host=localhost;dbname=gecouz_madetec.uz',
        'username' => 'madetec',
        'password' => 'Vikqab-zajpeg-jyzno5',
    ];
$settings = [
    'class' => 'yii\db\Connection',
    'charset' => 'utf8mb4',
    // Schema cache options (for production environment)
    'enableSchemaCache' => true,
    'schemaCacheDuration' => 60,
    'schemaCache' => 'cache',
];

return \yii\helpers\ArrayHelper::merge($settings, $db);
