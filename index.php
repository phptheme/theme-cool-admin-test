<?php

require __DIR__ . '/_common.php';

require __DIR__ . '/_header.php';

$rows = [
    [
        'id' => '1',
        'name' => 'User 1',
        'email' => 'email1@example.com'
    ],
    [
        'id' => '2',
        'name' => 'User 2',
        'email' => 'email2@example.com'
    ]    
];

$table = $theme->createTable(['rows' => $rows]);

$table->columns = [
    $table->createColumn([
        'attribute' => 'id'
    ]),
    $table->createColumn([
        'header' => 'Name',
        'attribute' => 'name'
    ]),
    $table->createColumn([
        'header' => 'E-mail',
        'attribute' => 'email'
    ])->displayLarge(),
    'Just Text Column'
];

echo $table->run();

require __DIR__ . '/_footer.php';