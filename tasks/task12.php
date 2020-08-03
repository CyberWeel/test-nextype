<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/core.php';
$title = 'Task 1.2';

// Задача 1.2
function getItemsFromDate(string $date) :array
{
    $filename = $_SERVER['DOCUMENT_ROOT'].'/data.json';
    $result = [];
    // Обычный $date = strtotime($date) мог быть чреват ошибками, решил использовать объект
    $dateFormat = 'd.m.Y H:i:s';
    $date = DateTime::createFromFormat($dateFormat, $date);
    $timestamp = $date->getTimestamp();

    if (file_exists($filename))
        $arr = json_decode (file_get_contents ($filename), true);

    foreach ($arr as $item) {
        $itemDate = DateTime::createFromFormat($dateFormat, $item['created']);

        if ($itemDate->getTimestamp() >= $timestamp) {
            array_push($result, $item);
        }
    }

    return $result;
}
?>

<?php require_once TEMPLATES.'/header.php'?>

<!-- Вывод результата работы функции -->
<pre>
<p><?php print_r(getItemsFromDate("20.01.2020 12:00:00"))?></p>
</pre>

<?php require_once TEMPLATES.'/footer.php'?>
