<?php

use Repository\TodoListRepositoryImpl;
use Service\TodoListServiceImpl;

define('__ROOT__', dirname(dirname(__FILE__)));
require_once __ROOT__ . '/Repository/TodoListRepository.php';
require_once __ROOT__ . '/Service/TodoListService.php';

function testShowTodoList(): void
{
    $todolistRepository = new TodoListRepositoryImpl();
    $todolistRepository->todoList[0] = "aku";
    $todolistRepository->todoList[1] = "kamu";
    $todolistRepository->todoList[2] = "dia";
    $todolistService = new TodoListServiceImpl($todolistRepository);

    $todolistService->showTodoList();
}
testShowTodoList();
