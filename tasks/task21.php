<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/core.php';
$title = 'Task 2.1';

// Задача 2.1
include_once($_SERVER['DOCUMENT_ROOT'].'/classes/autoload.php');
echo CBase::getParam('message');
?>

<?php require_once TEMPLATES.'/header.php'?>

<?php require_once TEMPLATES.'/footer.php'?>
