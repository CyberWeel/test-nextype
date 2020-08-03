<?php
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

/**
 * Функция сортирует многомерный массив
 * @param array $arr сортируемый массив
 * @param string $key ключ, по которому нужно сортировать
 * @param int $type константа SORT_ASC или SORT_DESC
 * @return array отсортированный массив
 */
function arrSort(array $arr, string $key = 'sort', int $type = SORT_ASC) :array
{
    array_multisort(array_column($arr, $key), $type, SORT_REGULAR, $arr);

    return $arr;
}
