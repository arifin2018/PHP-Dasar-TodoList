<?php

define('__ROOT__', dirname(dirname(__FILE__)));
require_once __ROOT__ . '/Repository/TodoListRepository.php';
require_once __ROOT__ . '/Service/TodoListService.php';
require_once __ROOT__ . '/Entity/TodoList.php';
require_once __ROOT__ . '/View/TodoListView.php';
require_once __ROOT__ . '/Helpers/InputHelper.php';

use Repository\TodolistRepositoryImpl;
use Service\TodolistServiceImpl;
use View\TodoListView;

function testViewShowTodolist(): void
{

    $todolistRepository = new TodolistRepositoryImpl();
    $todolistService = new TodolistServiceImpl($todolistRepository);
    $todolistView = new TodolistView($todolistService);

    $todolistService->addTodolist("Belajar PHP");
    $todolistService->addTodolist("Belajar PHP OOP");
    $todolistService->addTodolist("Belajar PHP Database");

    $todolistView->viewShowTodoList();
}
testViewShowTodolist();
