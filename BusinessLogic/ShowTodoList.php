<?php

// Menampilkan todolist
function showTodoList()
{
    global $todolist;
    // print_r($todolist);
    // die;
    echo "ToDoList" . PHP_EOL;
    foreach ($todolist as $number => $value) {
        $numbers = $number + 1;
        echo "{$numbers}. $value" . PHP_EOL;
    }
}
