<?php

// Menampilkan todolist
function showTodoList()
{
    global $todolist;
    // print_r($todolist);
    // die;
    echo "ToDoList" . PHP_EOL;
    foreach ($todolist as $number => $value) {
        echo "$number. $value" . PHP_EOL;
    }
}
