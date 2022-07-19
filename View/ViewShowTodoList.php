<?php
require_once __ROOT__ . '/BusinessLogic/ShowTodoList.php';
require_once __ROOT__ . '/Helpers/Input.php';
require_once __ROOT__ . '/View/ViewAddTodoList.php';
require_once __ROOT__ . '/View/ViewRemoveTodoList.php';

function ViewShowTodoList()
{
    do {
        showTodoList() . PHP_EOL;

        echo "MENU" . PHP_EOL;
        echo "1. Tambah Todo" . PHP_EOL;
        echo "2. Hapus Todo" . PHP_EOL;
        echo "x. Keluar" . PHP_EOL;

        $pilihan = trim(input("Pilihan kamu"));
        switch ($pilihan) {
            case "1":
                ViewAddTodoList();
                ViewShowTodoList();
            case "2":
                ViewRemoveTodoList();
                ViewShowTodoList();
            case 'x':
                break;
            default:
                echo "pilihan tidak dimengerti" . PHP_EOL;
        }
    } while ($pilihan != 'x');
}
