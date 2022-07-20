<?php
require_once __ROOT__ . '/BusinessLogic/ShowTodoList.php';
require_once __ROOT__ . '/Helpers/Input.php';
require_once __ROOT__ . '/View/ViewAddTodoList.php';
require_once __ROOT__ . '/View/ViewRemoveTodoList.php';

function ViewShowTodoList()
{
    while (true) {
        showTodoList() . PHP_EOL;

        echo "MENU" . PHP_EOL;
        echo "1. Tambah Todo" . PHP_EOL;
        echo "2. Hapus Todo" . PHP_EOL;
        echo "x. Keluar" . PHP_EOL;

        $pilihan = trim(input("Pilihan kamu"));
        if ($pilihan == "x") {
            break;
        } elseif ($pilihan == "1") {
            ViewAddTodoList();
            ViewShowTodoList();
        } elseif ($pilihan == "2") {
            ViewRemoveTodoList();
            ViewShowTodoList();
        } else {
            echo "pilihan tidak dimengerti" . PHP_EOL;
        }
    };
}
