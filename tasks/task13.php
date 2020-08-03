<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/core.php';
$title = 'Task 1.3';

// Задача 1.3
$array = [
    [
        'sort' => '20',
        'name' => 'Mike'
    ],
    [
        'sort' => '10',
        'name' => 'Adam'
    ],
    [
        'sort' => '40',
        'name' => 'Stive'
    ],
    [
        'sort' => '300',
        'name' => 'Jane'
    ],
];
?>

<?php require_once TEMPLATES.'/header.php'?>

<!-- Вывод результата работы функции -->
<pre>
<p><?php print_r(arrSort($array, 'sort', SORT_DESC))?></p>
</pre>

<?php require_once TEMPLATES.'/footer.php'?>
