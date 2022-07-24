<?php

namespace Service {

    use Repository\TodoListRepository;
    use Entity\Todolist;

    interface TodoListService
    {
        public function showTodoList(): void;
        public function addTodoList(string $todo): void;
        public function removeTodoList(int $number): void;
    }

    class TodoListServiceImpl
    {
        private TodoListRepository $todolistRepository;

        public function __construct(TodoListRepository $todoListRepository)
        {
            $this->todolistRepository = $todoListRepository;
        }

        public function showTodoList(): void
        {
            echo "ToDoList" . PHP_EOL;

            $todoList = $this->todolistRepository->findAll();
            foreach ($todoList as $number => $value) {
                echo "{$number}. " . $value->getTodo() . PHP_EOL;
            }
        }
        public function addTodoList(string $todo): void
        {
            $todoList = new TodoList($todo);
            $this->todolistRepository->save($todoList);
            echo "Sukses menambah todolist" . PHP_EOL;
        }
        public function removeTodoList(int $number): void
        {
            if ($this->todolistRepository->remove($number)) {
                echo "sukses menghapus data";
            } else {
                echo "gagal menghapus data";
            }
        }
    }
}
