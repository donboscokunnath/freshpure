<?php

$params = array_merge(
        require(__DIR__ . '/../../common/config/params.php'), require(__DIR__ . '/../../common/config/params-local.php'), require(__DIR__ . '/params.php'), require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',
    'components' => [
        'request' => [
            'csrfParam' => '_csrf-frontend',
            'class' => 'common\components\Request',
            'web' => '/frontend/web',
        ],
        'uploadFile' => [
            'class' => 'common\components\UploadFile',
        ],
        'mailer ' => [
            'class' => 'yii\swiftmailer\Mailer ',
            'viewPath' => '@common/mail ',
            'useFileTransport' => false, //set this property to false to send mails to real email addresses
            //comment the following array to send mail using php's mail function
            'transport' => [
                    'class' => 'Swift_SmtpTransport',
                    'host' => 'smtp.gmail.com',
                    'username' => 'mastermbbslearn@gmail.com',
                    'password' => 'qouzbthglwbopfgi',
                    'port' => '587',
                    'encryption' => 'tls',
                                ],
        ],
        'user' => [
            'identityClass' => 'common\models\Login',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-frontend', 'httpOnly' => true],
        ],
       




        






        'session' => [
// this is the name of the session cookie used for login on the frontend
            'name' => 'advanced-frontend',
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
            // 'showScriptName' => false,
            'rules' => [
                'login' => 'site/login',
                'register'=>'site/register',
                'dashboard'=>'dashboard/dashboard',
                'logout' => 'site/logout',
                // 'brands' => 'site/brands',
                // 'brands/<name:\w+(-\w+)*>' => 'site/brands',
                // 'category/<name:\w+(-\w+)*>' => 'site/category',
                // 'company-user/update/<name:\w+(-\w+)*>' => 'company-user/update',
                // 'projects/update/<id:\d*>' => 'projects/update',
                // 'projects/view/<name:\w+(-\w+)*>' => 'projects/view',
                // 'projects/delete/<id:\d*>' => 'projects/delete',
                // 'jobs/edit/<name:\w+(-\w+)*>' => 'jobs/edit',
                // 'jobs/delete/<name:\w+(-\w+)*>' => 'jobs/delete',
                // 'jobs/view/<name:\w+(-\w+)*>' => 'jobs/view',
                // 'jobs/shortlisted/<name:\w+(-\w+)*>' => 'jobs/shortlisted',
                // 'vendors/view/<id:\w+(-\w+)*>' => 'vendors/view',
                // 'e-jobs' => 'jobs/e-jobs',
                // 'jobs/detail/<name:\w+(-\w+)*>' => 'jobs/detail',
                // 'e-procurement/view/<id:\d*>' => 'e-procurement/view',
                // 'e-procurement/delete/<id:\d*>' => 'e-procurement/delete',
                // 'e-procurement/quotation-view/<id:\d*>' => 'e-procurement/quotation-view',
                // 'e-procurement/enquiry-sent/<enquiry_id:\d*>' =>'e-procurement/enquiry-sent',
                // 'e-procurement/quotation-received/<enquiry_id:\d*>' =>'e-procurement/quotation-received',
                // 'industries' => 'site/industries',
                // 'industries/<name:\w+(-\w+)*>' => 'site/industries',
                // 'sales/view/<id:\d*>' => 'sales/view',
            ],
        ],




        
        'studentsLog' => [
            'class' => 'common\components\StudentsLoging',
        ],
    ],
    'params' => $params,
];

