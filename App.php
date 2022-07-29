<?php
// 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
require_once 'Entity/TodoList.php';
require_once 'Helpers/InputHelper.php';
require_once 'Repository/TodoListRepository.php';
require_once 'Service/TodoListService.php';
require_once 'View/TodoListView.php';

use Repository\TodolistRepositoryImpl;
use Service\TodolistServiceImpl;
use View\TodoListView;

$todolistRepository = new TodolistRepositoryImpl();
$todolistService = new TodolistServiceImpl($todolistRepository);
$todolistView = new TodolistView($todolistService);

$todolistService->addTodolist("Belajar PHP");
$todolistService->addTodolist("Belajar PHP OOP");
$todolistService->addTodolist("Belajar PHP Database");

$todolistView->viewShowTodoList();
