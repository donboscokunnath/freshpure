<?php

$params = array_merge(
        require(__DIR__ . '/../../common/config/params.php'), require(__DIR__ . '/../../common/config/params-local.php'), require(__DIR__ . '/params.php'), require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-backend',
    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'backend\controllers',
    'bootstrap' => ['log'],
    'modules' => [
        'gridview' => [
            'class' => '\kartik\grid\Module'
        ]
    ],
    'components' => [
        'request' => [
            'csrfParam' => '_csrf-backend',
            'class' => 'common\components\Request',
            'web' => '/backend/web',
            'adminUrl' => '/admin'
        ],
         'mailer' => [
             'class' => 'yii\swiftmailer\Mailer',
             'transport' => [
                 'class' => 'Swift_SmtpTransport',
                 'host' => 'mail.synapsglobal.org',  // e.g. smtp.mandrillapp.com or smtp.gmail.com
                 'username' => 'info@synapsglobal.org',
                 'password' => '[~-4pEuAn&ZB',
                 'port' => '465', // 587 Port 25 is a very common port too
                  'encryption' => 'ssl',
                //  'encryption' => 'tls', // It is often used, check your provider or mail server specs
             ],
         ],
        'user' => [
            'identityClass' => 'common\models\Login',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-backend', 'httpOnly' => true],
        ],
        'session' => [
// this is the name of the session cookie used for login on the backend
            'name' => 'advanced-backend',
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
        
        
        
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
        ],
        // 'jwt' => [
        //     'class' => \sizeg\jwt\Jwt::class,
        //     'key' => 'secret',
        //     'jwtValidationData' => backend\components\JwtValidationData::class,
        // ],
        'jwt' => [
          'class' => \sizeg\jwt\Jwt::class,
          'key'   => 'secret',
        ],

    ],
    /*'as beforeRequest' =>
        [
        'class' => 'yii\filters\AccessControl',
        'rules' => [
                [
                'actions' => ['login', 'error'],
                'allow' => true,
            ],
                [
                'allow' => true,
                'roles' => ['@'],
            ],
        ],
    ],*/
    'params' => $params,
];
