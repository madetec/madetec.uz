<?php

use codemix\localeurls\UrlManager;

return [
    'class' => UrlManager::class,
    'languages' => ['ru', 'en'],
    'enablePrettyUrl' => true,
    'showScriptName' => false,
    'ignoreLanguageUrlPatterns' => [
        '#^images/#' => '#^images/#',
        '#^css/#' => '#^css/#',
        '#^favicons/#' => '#^favicons/#',
        '#^img/#' => '#^img/#',
        '#^js/#' => '#^js/#',
        '#^vendor/#' => '#^vendor/#',
    ],
    'rules' => [
        '' => 'site/index',
        '<_a:(design|development|watch-vault|digital|project|about|contact)>' => 'site/<_a>',
        'about' => 'site/about',
        'contact' => 'site/contact',
        'captcha' => 'site/captcha',
        'sitemap.xml' => 'sitemap/index',
        '<_c:[\w+]>/<_a:[\w_-]+>' => '<_c>/<_a>',
    ],
];
