<?php

require_once "./Model/TodoList.php";
require_once "./BusinessLogic/AddTodoList.php";

addTodoList("Akbar");
addTodoList("Babelan");
addTodoList("Musthofa");

var_dump($todoList);