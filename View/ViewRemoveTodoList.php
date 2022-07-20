<?php
require_once __ROOT__ . '/BusinessLogic/RemoveTodoList.php';

function ViewRemoveTodoList()
{
    echo "Remove TodoList" . PHP_EOL;
    $pilihan = Input("Nomor");
    if ($pilihan == 'x' || gettype($pilihan) == "string") {
        echo "batal menambah todo" . PHP_EOL;
    } else {
        $success = removeTodoList($pilihan);
        if ($success) {
            echo "Success menghapus todo nomor {$pilihan}" . PHP_EOL;
        } else {
            echo "Gagal menghapus todo nomor {$pilihan}" . PHP_EOL;
        }
    }
}
