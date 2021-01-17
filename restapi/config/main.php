<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => 'app-restapi',
//    'homeUrl' => '/',
    'basePath' => dirname(__DIR__),
    'bootstrap' => [
        'log',
//        'common\bootstrap\SetUp',
//        'frontend\bootstrap\SetUp',
    ],
//    'language' => 'ru',
    'controllerNamespace' => 'restapi\controllers',
    'components' => [
      'request' => [
            'baseUrl' => '',
//            'csrfParam' => '_csrf-coopered',
          'parsers' => [
              'application/json' => 'yii\web\JsonParser',
          ]
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-frontend', 'httpOnly' => true],
            'loginUrl' => ['login'],
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'enableStrictParsing' => true,
            'showScriptName' => false,
            'rules' => [
                ['class' => 'yii\rest\UrlRule',
                    'controller' =>[
                        'products',
                        'categories',
                ],
],
            ],
        ]
    ],

    'params' => $params,
];
