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
        }

        public function remove(int $number): bool
        {
            return false;
        }

        public function findAll(): array
        {
            return $this->todoList;
        }
    }
}
