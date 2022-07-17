<?php

// menambahkan todolist
function addTodoList(string $todo)
{
    global $todolist;
    $number = sizeof($todolist);
    $todolist[$number] = $todo;
}
