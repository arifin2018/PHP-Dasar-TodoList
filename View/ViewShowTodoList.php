<?php

require_once '/Users/arifinlenna/Documents/belajar/PHP-Dasar-TodoList/BusinessLogic/ShowTodoList.php';
require_once '/Users/arifinlenna/Documents/belajar/PHP-Dasar-TodoList/Helpers/Input.php';
require_once '/Users/arifinlenna/Documents/belajar/PHP-Dasar-TodoList/View/ViewAddTodoList.php';
require_once '/Users/arifinlenna/Documents/belajar/PHP-Dasar-TodoList/View/ViewRemoveTodoList.php';

function ViewShowTodoList()
{
    showTodoList();

    echo "MENU" . PHP_EOL;
    echo "1. Tambah Todo" . PHP_EOL;
    echo "2. Hapus Todo" . PHP_EOL;
    echo "x. Keluar" . PHP_EOL;

    $pilihan = trim(input("Pilihan kamu"));
    while (true) {
        switch ($pilihan) {
            case "1":
                ViewAddTodoList();
                ViewShowTodoList();
            case "2":
                ViewRemoveTodoList();
                ViewShowTodoList();
            case 'x':
                break;
                return false;
            default:
                echo "pilihan tidak dimengerti";
        }
    }
}
