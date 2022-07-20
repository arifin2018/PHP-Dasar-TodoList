<?php

namespace Service {

    use Repository\TodoListRepository;

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
            foreach ($this->todolistRepository->findAll() as $number => $value) {
                $numbers = $number + 1;
                echo "{$numbers}. $value" . PHP_EOL;
            }
        }
        public function addTodoList(string $todo): void
        {
        }
        public function removeTodoList(int $number): void
        {
        }
    }
}
