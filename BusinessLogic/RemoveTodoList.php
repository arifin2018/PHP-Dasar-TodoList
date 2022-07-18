<?php

// menghapus todolist
function removeTodoList(int $number): bool
{
    global $todolist;

    if ($number > sizeof($todolist)) {
        return false;
    }

    for ($i = $number; $i < sizeof($todolist) - 1; $i++) {
        $todolist[$i] = $todolist[$i + 1];
    }

    unset($todolist[sizeof($todolist) - 1]);

    return true;
}
