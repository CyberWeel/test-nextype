<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/core.php';
$title = 'Task 1.1';

// Задача 1.1
function convertFullName(string $string) :string
{
    $arr = explode(' ', $string);
    $result = '';

    for ($i = 0; $i < count($arr); $i++) {
        if ($i === 0) {
            $result .= $arr[$i].' ';
        } else {
            $result .= wordReduction($arr[$i]);
        }
    }

    return $result;
}
?>

<?php require_once TEMPLATES.'/header.php'?>

<!-- Вывод результата работы функции -->
<p><?=convertFullName('Иванов Иван Иванович')?></p>

<?php require_once TEMPLATES.'/footer.php'?>
