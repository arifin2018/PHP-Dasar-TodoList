<?php

namespace View {

    use Helper\InputHelper;
    use Service\TodoListService;

    class TodoListView
    {
        private TodoListService $todolistService;

        public function __construct(TodoListService $todolistService)
        {
            $this->todolistService = $todolistService;
        }

        public function viewShowTodoList(): void
        {
            while (true) {
                $this->todolistService->showTodoList() . PHP_EOL;

                echo "MENU" . PHP_EOL;
                echo "0. Keluar" . PHP_EOL;
                echo "1. Tambah Todo" . PHP_EOL;
                echo "2. Hapus Todo" . PHP_EOL;

                // $pilihan = trim(input("Pilihan kamu"));
                $pilihan = strtoupper(InputHelper::Input("Pilihan kamu"));
                if ($pilihan == "0") {
                    break;
                } elseif ($pilihan == "1") {
                    $this->addTodoList();
                } elseif ($pilihan == "2") {
                    $this->removeTodoList();
                } else {
                    echo "pilihan tidak dimengerti" . PHP_EOL . PHP_EOL;
                }
            };
            echo "Sampai jumpa kembali" . PHP_EOL;
        }
        public function addTodoList(): void
        {
            echo "Menambah TodoList";
            $todo = trim(InputHelper::Input("Todo ('x' untuk batal)"));
            if ($todo == '0') {
                echo "batal menambah todo" . PHP_EOL;
            } else {
                $this->todolistService->addTodoList($todo);
            }
        }
        public function removeTodoList(): void
        {
            print_r('remove');
        }
    }
}
