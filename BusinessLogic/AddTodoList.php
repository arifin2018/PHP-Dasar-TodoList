<?php

require_once '/Users/arifinlenna/Documents/belajar/PHP-Dasar-TodoList/Model/TodoList.php';

// menambahkan todolist
function addTodoList(string $todo)
{
    global $todolist;
    $number = sizeof($todolist);
    $todolist[$number] = $todo;
}
