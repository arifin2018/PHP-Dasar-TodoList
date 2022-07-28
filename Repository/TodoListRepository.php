<?php

namespace Repository {

    use Entity\TodoList;

    interface TodoListRepository
    {
        public function save(TodoList $todoList): void;
        public function remove(int $number): bool;
        public function findAll(): array;
    }

    class TodoListRepositoryImpl implements TodoListRepository
    {
        public array $todoList = [];

        public function save(TodoList $todoList): void
        {
            $number = sizeof($this->todoList) + 1;
            $this->todoList[$number] = $todoList;
        }

        public function remove(int $number): bool
        {
            $todolist = $this->todoList;

            if ($number > sizeof($todolist)) {
                return false;
            }

            for ($i = $number; $i < sizeof($todolist); $i++) {
                $this->todoList[$i] = $todolist[$i + 1];
            }

            unset($this->todoList[sizeof($todolist)]);

            return true;
        }

        public function findAll(): array
        {
            return $this->todoList;
        }
    }
}
