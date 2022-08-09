<?php
require_once "./Model/TodoList.php";
require_once "./BusinuessLogic/RemoveTodoList.php";
require_once "./BusinuessLogic/AddTodoList.php";
require_once "./BusinuessLogic/ShowTodoList.php";

addTodoList("Rizka");
addTodoList("Rachmawati");
addTodoList("Ivanda");
addTodoList("Yovinsha");

showTodoList();

removeTodoList(2);
showTodoList();

$success = removeTodoList(4);
var_dump($success);