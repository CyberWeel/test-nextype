<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/core.php';
$title = 'Главная';
?>

<?php require_once TEMPLATES.'/header.php'?>

<table>
    <thead>
        <tr>
            <td>Задание</td>
            <td>Ссылка на задание</td>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Task 1.1</td>
            <td><a href="<?=TASKS.'/task11.php'?>">Task 1.1</a></td>
        </tr>
    </tbody>
</table>

<?php require_once TEMPLATES.'/footer.php'?>
