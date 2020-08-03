<?php
// Я не стал мудрить и разделять константы и функции на разные файлы для
// тестового задания, но на реальных задачах лучше разделять логику

define('TASKS', '/tasks');
define('TEMPLATES', $_SERVER['DOCUMENT_ROOT'].'/templates');

/**
 * Функция оставляет от слова только первый символ и прибавляет к нему точку
 * @param string $word изначальное слово
 * @return string сокращённый вариант
 */
function wordReduction(string $word) :string
{
    return mb_substr($word, 0, 1).'.';
}
