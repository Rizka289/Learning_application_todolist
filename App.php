<?php
require_once __DIR__ .  "/Model/TodoList.php";
require_once __DIR__ .  "/BusinuessLogic/AddTodoList.php";
require_once __DIR__ .  "/BusinuessLogic/RemoveTodoList.php";
require_once __DIR__ .  "/BusinuessLogic/ShowTodoList.php";
require_once __DIR__ .  "/View/ViewRemoveTodoList.php";
require_once __DIR__ .  "/View/ViewAddTodoList.php";
require_once __DIR__ .  "/View/ViewShowTodoList.php";
require_once __DIR__ .  "/Helper/Input.php";

echo "Hello TodoList" . PHP_EOL;

viewShowTodoList();