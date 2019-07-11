<?php

require __DIR__ . '/_common.php';

require __DIR__ . '/_header.php';

$rows = [
    [
        'name' => 'User 1',
        'email' => 'email1@example.com'
    ],
    [
        'name' => 'User 2',
        'email' => 'email2@example.com'
    ]    
];

echo $theme->table([
    'rows' => $rows,
    /*
    'header' => [
        'columns' => [
            ['content' => 'Name 1'],
            ['content' => 'E-mail 1']
        ]
    ],
    */
    'columns' => [
        [
            'header' => ['content' => 'Name'],
            //'footer' => ['content' => 'name footer'],
            'attribute' => 'name'
        ],
        [
            'header' => ['content' => 'E-mail'],
            //'footer' => ['content' => 'email footer'],
            'attribute' => 'email'
        ]
    ]
]);

?>

Hello 123 1 231 3123123
<br>
Hello 123 1 231 3123123
<br>
Hello 123 1 231 3123123
<br>
Hello 123 1 231 3123123
<br>
Hello 123 1 231 3123123
<br>
Hello 123 1 231 3123123
<br>
Hello 123 1 231 3123123
<br>
Hello 123 1 231 3123123
<br>
Hello 123 1 231 3123123

<?php

require __DIR__ . '/_footer.php';