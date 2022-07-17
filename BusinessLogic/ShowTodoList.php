<?php

// Menampilkan todolist
function showTodoList()
{
    global $todolist;
    echo "ToDoList" . PHP_EOL;
    foreach ($todolist as $number => $value) {
        echo "$number. $value" . PHP_EOL;
    }
}
