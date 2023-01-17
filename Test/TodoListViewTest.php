<?php

require_once "../Entity/TodoList.php";
require_once "../Repository/TodoListRepository.php";
require_once "../Service/TodoListService.php";
require_once "../View/TodoListView.php";
require_once "../Helper/InputHelper.php";

use \Entity\TodoList;
use \Repository\TodoListRepositoryImpl;
use \Service\TodoListServiceImpl;
use View\TodoListView;

function testViewShowTodoList(): void
{
    $todoListRepository = new TodoListRepositoryImpl();
    $todoListService = new TodoListServiceImpl($todoListRepository);
    $todoListView = new TodoListView($todoListService);

    $todoListService->addTodoList("Belajar PHP");
    $todoListService->addTodoList("Belajar PHP OOP");
    $todoListService->addTodoList("Belajar PHP Database");

    $todoListView->showTodoList();

}

function testViewAddTodoList(): void
{
    $todoListRepository = new TodoListRepositoryImpl();
    $todoListService = new TodoListServiceImpl($todoListRepository);
    $todoListView = new TodoListView($todoListService);

    $todoListService->addTodoList("Belajar PHP");
    $todoListService->addTodoList("Belajar PHP OOP");
    $todoListService->addTodoList("Belajar PHP Database");

    $todoListService->showTodoList();

    $todoListView->addTodoList();

    $todoListService->showTodoList();

    $todoListView->addTodoList();

    $todoListService->showTodoList();

}

function testViewRemoveTodoList(): void
{
    $todoListRepository = new TodoListRepositoryImpl();
    $todoListService = new TodoListServiceImpl($todoListRepository);
    $todoListView = new TodoListView($todoListService);

    $todoListService->addTodoList("Belajar PHP");
    $todoListService->addTodoList("Belajar PHP OOP");
    $todoListService->addTodoList("Belajar PHP Database");

    $todoListService->showTodoList();

    $todoListView->removeTodoList();

    $todoListService->showTodoList();

    $todoListView->removeTodoList();

    $todoListService->showTodoList();
}
testViewShowTodoList();