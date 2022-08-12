<?php
require_once "../View/ViewAddTodoList.php";
require_once "../BusinuessLogic/AddTodoList.php";
require_once "../BusinuessLogic/ShowTodoList.php";

addTodoList("Rizka");
addTodoList("Rachmawati");
addTodoList("Programmer");

viewAddTodoList();
showTodoList();
viewAddTodoList();
showTodoList();