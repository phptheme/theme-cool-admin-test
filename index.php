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
    $table->createAttributeColumn([
        'attribute' => 'id'
    ]),
    $table->createAttributeColumn([
        'header' => 'Name',
        'attribute' => 'name'
    ]),
    $table->createAttributeColumn([
        'header' => 'E-mail',
        'attribute' => 'email'
    ]),
    'Just Text Column'
];

echo $table->run();

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