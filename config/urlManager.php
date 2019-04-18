<?php
return [
    'enablePrettyUrl' => true,
    'showScriptName' => false,
    'rules' => [
        '' => 'site/index',
        'links' => 'site/links',
        'sitemap.xml'=>'sitemap/index',
        'captcha' => 'site/captcha',
        'auth/login' => 'auth/login',
        'auth/logout' => 'auth/logout',
        'objects' => 'site/objects',
        'contact/<body:[\w\-]+>' => 'site/contact',
        'contact' => 'site/contact',
        'about' => 'site/about',
        'news/index/<page:\d+>/<per-page:\d+>' => 'news/index',
        'news/index/<page:\d+>' => 'news/index',
        'news' => 'news/index',
        'news/<slug:[\w\-]+>' => 'news/view',
        'thermoplint' => 'services/thermoplint',
        'turnkey' => 'services/turnkey',
        'ventilation' => 'services/ventilation',
    ],
];