<?php
require_once "./Model/TodoList.php";
require_once "./BusinuessLogic/AddTodoList.php";

addTodoList("Rizka");
addTodoList("Rachmawati");
addTodoList("Cantik");

var_dump($todoList);