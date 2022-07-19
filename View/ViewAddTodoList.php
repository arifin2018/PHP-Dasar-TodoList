<?php
require_once __ROOT__ . '/Model/TodoList.php';
require_once __ROOT__ . '/Helpers/Input.php';
require_once __ROOT__ . '/BusinessLogic/ShowTodoList.php';
require_once __ROOT__ . '/BusinessLogic/AddTodoList.php';

function ViewAddTodoList()
{
    echo "Menambah TodoList";
    $todo = Input("Todo ('x' untuk batal)");
    switch ($todo) {
        case 'x':
            break;
        default:
            addTodoList($todo);
    }
}
