<?php

use Repository\TodoListRepositoryImpl;
use Service\TodoListServiceImpl;
use Entity\TodoList;

define('__ROOT__', dirname(dirname(__FILE__)));
require_once __ROOT__ . '/Repository/TodoListRepository.php';
require_once __ROOT__ . '/Service/TodoListService.php';
require_once __ROOT__ . '/Entity/TodoList.php';

function testShowTodoList(): void
{
    $todolistRepository = new TodoListRepositoryImpl();
    $todolistRepository->todoList[0] = new TodoList("aku");
    $todolistRepository->todoList[1] = new TodoList("kamu");
    $todolistRepository->todoList[2] = new TodoList("dia");
    $todolistService = new TodoListServiceImpl($todolistRepository);

    $todolistService->showTodoList();
}

function testAddTodoList(): void
{
    $todolistRepository = new TodoListRepositoryImpl();
    $todolistService = new TodoListServiceImpl($todolistRepository);
    $todolistService->addTodoList("Belajar PHP");
    $todolistService->addTodoList("Belajar JAVA");
    $todolistService->addTodoList("Belajar Go");

    $todolistService->showTodoList();
}

function testDeleteTodoList(): void
{
    $todolistRepository = new TodoListRepositoryImpl();
    $todolistService = new TodoListServiceImpl($todolistRepository);
    $todolistService->addTodoList("Belajar PHP");
    $todolistService->addTodoList("Belajar JAVA");
    $todolistService->addTodoList("Belajar Go");
    $todolistService->addTodoList("Belajar Gos");
    $todolistService->addTodoList("Belajar God");
    $todolistService->addTodoList("Belajar Gdo");
    $todolistService->addTodoList("Belajar God");
    $todolistService->addTodoList("Belajar dGo");
    $todolistService->addTodoList("Belajar Gxo");
    $todolistService->addTodoList("Belajar Gos");

    $todolistService->removeTodoList(1);
    $todolistService->showTodoList();
}

// testShowTodoList();
// testAddTodoList();
testDeleteTodoList();
