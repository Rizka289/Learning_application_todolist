<?php 
require_once "../View/ViewRemoveTodoList.php";
require_once "../BusinuessLogic/AddTodoList.php";
require_once "../BusinuessLogic/ShowTodoList.php";
require_once "../Model/TodoList.php";

addTodoList("Rizka");
addTodoList("Rachmawati");
addTodoList("Programmer");

showTodoList();
viewRemoveTodoList();
showTodoList();