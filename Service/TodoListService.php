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
            foreach ($this->todolistRepository->findAll() as $number => $value) {
                // $numbers = $number + 1;
                echo "{$number}. $value" . PHP_EOL;
            }
        }
        public function addTodoList(string $todo): void
        {
            print_r(new Todolist());
            die;
            $todoList = new TodoList($todo);
            $this->todolistRepository->save($todoList);
            echo "Sukses menambah todolist" . PHP_EOL;
        }
        public function removeTodoList(int $number): void
        {
        }
    }
}
