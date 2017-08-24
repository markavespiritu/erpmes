<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'authManager' => [
            'class' => 'yii\rbac\DbManager',
            'defaultRoles' => ['guest'],
        ],
    ],
    'modules' => [
    /*'rbac' => [
            'class' => 'niksko12\rbac\Module',
        ],*/
    'user' => [
        'class' => 'niksko12\user\Module',
        'admins' => ['markespiritu'],
        'enableFlashMessages' => false,
        'enableUnconfirmedLogin' => false,
        'generalApp' => true
        // you will configure your module inside this file
        // or if need different configuration for frontend and backend you may
        // configure in needed configs
            ],
    'auditlogs' => [
        'class' => 'niksko12\auditlogs\Module',
    ],
    'datecontrol' =>  [
            'class' => 'kartik\datecontrol\Module',

            // format settings for displaying each date attribute
            'displaySettings' => [
                'date' => 'd-m-Y',
                'time' => 'H:i:s A',
                'datetime' => 'd-m-Y H:i:s A',
            ],

            // format settings for saving each date attribute
            'saveSettings' => [
                'date' => 'd-m-Y', 
                'time' => 'H:i:s A',
                'datetime' => 'Y-m-d H:i:s',
            ],

            // automatically use kartik\widgets for each of the above formats
            'autoWidget' => true,

        ]
        ],
];
