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

        public function showTodoList(): void
        {
            while (true) {
                $this->todolistService->showTodoList() . PHP_EOL;

                echo "MENU" . PHP_EOL;
                echo "1. Tambah Todo" . PHP_EOL;
                echo "2. Hapus Todo" . PHP_EOL;
                echo "x. Keluar" . PHP_EOL;

                // $pilihan = trim(input("Pilihan kamu"));
                $pilihan = InputHelper::Input("Pilihan kamu");
                if ($pilihan == "x") {
                    break;
                } elseif ($pilihan == "1") {
                    $this->addTodoList();
                } elseif ($pilihan == "2") {
                    $this->removeTodoList();
                } else {
                    echo "pilihan tidak dimengerti" . PHP_EOL;
                }
            };
            echo "Sampai jumpa kembali" . PHP_EOL;
        }
        public function addTodoList(): void
        {
        }
        public function removeTodoList(): void
        {
        }
    }
}
