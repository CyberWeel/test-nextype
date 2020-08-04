<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/core.php';
$title = 'Task 1.4';

// Задача 1.4
$filename = $_SERVER['DOCUMENT_ROOT'].'/data2.json';
$result = [];

if (file_exists($filename))
    $result = json_decode (file_get_contents ($filename), true);

if (!empty($_GET['set_viewed'])) {
    $set_viewed = htmlspecialchars($_GET['set_viewed']);

    foreach ($result as &$item) {
        if (in_array($set_viewed, $item)) {
            $item['viewed'] += 1;
            break;
        }
    }

    file_put_contents($filename, json_encode($result));
    header('Location: '.TASKS.'/task14.php');
    exit;
}
?>

<?php require_once TEMPLATES.'/header.php'?>

<!-- Вывод результата работы функции -->
<? foreach ($result as $item): ?>
<div>
    <b><?=$item['name']?></b><br>
    <small>Viewed: <?=$item['viewed']?></small><br>
    <?=$item['text']?><br><br>
    <a href="?set_viewed=<?=$item['id']?>">I watched</a>
    <hr>
</div>
<?php endforeach ?>

<pre>
<?php # print_r($result)?>
</pre>

<?php require_once TEMPLATES.'/footer.php'?>
