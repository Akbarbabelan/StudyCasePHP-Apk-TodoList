<?php

/* require_once __DIR__ . "Model/TodoList.php";
require_once __DIR__ . "BusinessLogic/ShowTodoList.php";
require_once __DIR__ . "BusinessLogic/AddTodoList.php";
require_once __DIR__ . "BusinessLogic/RemoveTodoList.php";
require_once __DIR__ . "View/ViewShowTodoList.php";
require_once __DIR__ . "View/ViewAddTodoList.php";
require_once __DIR__ . "View/ViewRemoveTodoList.php";
require_once __DIR__ . "Helper/Input.php";
*/

require_once "entity/TodoList.php";
require_once "Helper/InputHelper.php";
require_once "Repository/TodoListRepository.php";
require_once "Service/TodoListService.php";
require_once "View/TodoListView.php";


use Repository\TodoListRepositoryImpl;
use Service\TodoListServiceImpl;
use View\TodoListView;

echo "Aplikasi TodoList". PHP_EOL;

$todoListRepository = new TodoListRepositoryImpl();
$todoListService = new TodoListServiceImpl($todoListRepository);
$todoListView = new TodoListView($todoListService);

$todoListView->showTodoList();