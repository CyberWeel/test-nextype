<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/core.php';
$title = 'Главная';
?>

<?php require_once TEMPLATES.'/header.php'?>

<table>
    <thead>
        <tr>
            <th>Задание</th>
            <th>Ссылка на задание</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Task 1.1</td>
            <td><a href="<?=TASKS.'/task11.php'?>">Task 1.1</a></td>
        </tr>
        <tr>
            <td>Task 1.2</td>
            <td><a href="<?=TASKS.'/task12.php'?>">Task 1.2</a></td>
        </tr>
        <tr>
            <td>Task 1.3</td>
            <td><a href="<?=TASKS.'/task13.php'?>">Task 1.3</a></td>
        </tr>
        <tr>
            <td>Task 1.4</td>
            <td><a href="<?=TASKS.'/task14.php'?>">Task 1.4</a></td>
        </tr>
    </tbody>
</table>

<?php require_once TEMPLATES.'/footer.php'?>
