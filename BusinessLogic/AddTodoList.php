<?php
define('__ROOT__', dirname(dirname(__FILE__)));
require_once __ROOT__ . '/Model/TodoList.php';

// menambahkan todolist
function addTodoList(string $todo)
{
    global $todolist;
    $number = sizeof($todolist);
    $todolist[$number] = $todo;
}
