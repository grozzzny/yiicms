<?php

$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/db.php';

$config = [
    'id' => 'app',
    'name' => 'my-site',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log', 'admin'],
    'language' => 'ru-RU',
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'components' => [
        'request' => [
            //'class' => 'grozzzny\lang\components\LangRequest',
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => '',
            'baseUrl' => ''
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => false,
            //'transport' => require __DIR__ . '/smtp.php'
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['info'],
                    'categories' => ['info'],
                    'logVars' => [],
                    'logFile' => '@app/runtime/logs/info.log'
                ],
            ],
        ],
        'view' => [
            'class' => '\rmrevin\yii\minify\View',
            'theme' => [
                'pathMap' => [
                    '@vendor/grozzzny/easyii2/views' => [
                        '@app/views/easyii2'
                    ],
                ],
            ],
            'enableMinify' => !YII_DEBUG,
            'concatCss' => true, // concatenate css
            'minifyCss' => true, // minificate css
            'concatJs' => true, // concatenate js
            'minifyJs' => true, // minificate js
            'minifyOutput' => true, // minificate result html page
            'webPath' => '@web', // path alias to web base
            'basePath' => '@webroot', // path alias to web base
            'minifyPath' => '@webroot/minify', // path alias to save minify result
            'jsPosition' => [ \yii\web\View::POS_HEAD ], // positions of js files to be minified
            'forceCharset' => 'UTF-8', // charset forcibly assign, otherwise will use all of the files found charset
            'expandImports' => true, // whether to change @import on content
            'compressOptions' => ['extra' => true], // options for compress
            'excludeFiles' => [],
            'excludeBundles' => [],
        ],
        'db' => $db,
        'urlManager' => [
            //'class' => 'grozzzny\lang\components\LangUrlManager',
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                '<controller:\w+>/view/<slug:[\w-]+>' => '<controller>/view',
                '<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
                '<controller:\w+>/cat/<slug:[\w-]+>' => '<controller>/cat',
                'admin/<controller:\w+>/<action:[\w-]+>/<id:\d+>' => 'admin/<controller>/<action>',
                'admin/<module:\w+>/<controller:\w+>/<action:[\w-]+>/<id:\d+>' => 'admin/<module>/<controller>/<action>'
            ],
        ],
        'assetManager' => [
            // uncomment the following line if you want to auto update your assets (unix hosting only)
            //'linkAssets' => true,
            'appendTimestamp' => true,
            'forceCopy' => false,
            'bundles' => [
                'yii\web\JqueryAsset' => [
                    'js' => [YII_DEBUG ? 'jquery.js' : 'jquery.min.js'],
                ],
                'yii\bootstrap\BootstrapAsset' => [
                    'basePath' => '@webroot',
                    'baseUrl' => '@web',
                    'css' => ['css/bootstrap.css'],
                ],
//                'grozzzny\depends\bootstrap4\Bootstrap4Asset' => [
//                    'basePath' => '@webroot',
//                    'baseUrl' => '@web',
//                    'css' => ['css/bootstrap4.css'],
//                ],
                'yii\bootstrap\BootstrapPluginAsset' => [
                    'js' => [YII_DEBUG ? 'js/bootstrap.js' : 'js/bootstrap.min.js'],
                ],
            ],
        ],
        'user' => [
            'identityClass' => 'yii\easyii2\models\Admin',
            'enableAutoLogin' => true,
            'authTimeout' => 86400,
        ],
        'i18n' => [
            'translations' => [
                'easyii2' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    'sourceLanguage' => 'en-US',
                    'basePath' => '@easyii2/messages',
                    'fileMap' => [
                        'easyii2' => 'admin.php',
                    ]
                ]
            ],
        ],
        'formatter' => [
            'sizeFormatBase' => 1000
        ],
    ],
    'modules' => [
        'admin' => [
            'class' => 'yii\easyii2\AdminModule',
            'modules' => [
                'page' => 'yii\easyii2\modules\page\PageModule',
                'partners' => 'grozzzny\partners\PartnersModule',
                'editable' => 'grozzzny\editable\Module',
                'catalog' => [
                    'class' => 'grozzzny\catalog\CatalogModule',
                    'settings' => [
                        'modelCategory' => '\app\models\Category',
                        'modelItem' => '\app\models\Item',
                    ]
                ],
                'soclink' => 'grozzzny\soc_link\SocLinkModule'
            ]
        ],
    ],
    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];
}

return $config;
