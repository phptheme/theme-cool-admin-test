<?php

$theme->beginLayout([
    'mainMenu' => [
        'items' => [
            [
                'label' => 'Settings',
                'url' => '#',
                'icon' => 'fa fa-wrench',
                'items' => [
                    [
                        'icon' => 'fa fa-envelope',
                        'label' => 'Messages',
                        'url' => '#messages'
                    ]
                ]
            ],
            [
                'label' => 'Pages',
                'url' => '#',
                'icon' => 'fa fa-file-text',
                'active' => true
            ],
            [
                'label' => 'Blocks',
                'url' => '#',
                'icon' => 'fa fa-th'
            ]                        
        ]
    ],
    'actionsMenu' => [
        'items' => [
            [
                'label' => 'Create',
                'url' => '#create',
                'icon' => 'fa fa-plus',
                'linkOptions' => [
                    'class' => 'btn btn-success'
                ]
            ]
        ]
    ],
    'breadcrumbs' => [
        'items' => [
            [
                'label' => 'Home',
                'url' => '#home'
            ],
            [
                'label' => 'Users',
                'url' => '#users'
            ]            
        ]
    ],
    'title' => 'Dashboard 3',
    'optionsMenu' => [
        'items' => [
            [
                'icon' => 'zmdi zmdi-account',
                'label' => 'Account',
                'url' => '#account'
            ],
            [
                'label' => 'Settings',
                'icon' => 'zmdi zmdi-settings',
                'url' => '#settings'
            ],
            [
                'label' => 'Billing',
                'icon' => 'zmdi zmdi-money-box',
                'url' => '#billing'
            ]   
        ]
    ],
    'notifications' => [
        'items' => [
            [
                'label' => 'You got a email notification',
                'date' => 'April 12, 2018 06:50',
                'icon' => 'zmdi zmdi-file-text'
            ]
        ]
    ],
    'account' => [
        'name' => 'Denzel Po',
        'description' => 'denzel.po@example.com',
        'logoutUrl' => '#logout',
        'menu' => [
            'items' => [
                [
                    'label' => 'Account',
                    'icon' => 'zmdi zmdi-account',
                    'url' => '#account'
                ],
                [
                    'label' => 'Settings',
                    'icon' => 'zmdi zmdi-settings',
                    'url' => '#settings'
                ],
                [
                    'label' => 'Billing',
                    'icon' => 'zmdi zmdi-money-box',
                    'url' => '#billing'
                ]
            ]
        ]
    ]
]);