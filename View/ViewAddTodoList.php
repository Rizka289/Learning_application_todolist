<?php
require_once __DIR__ . "/../BusinuessLogic/AddTodoList.php";
require_once __DIR__ . "/../Model/TodoList.php";
require_once __DIR__ . "/../Helper/Input.php";

function viewAddTodoList()
{
    echo "TAMBAH TODO" . PHP_EOL;
    $todo = input("Todo (x untuk batal)");
    if($todo == "x"){
        echo "Batal Menambahkan Todo";
    }else {
        addTodoList($todo);
    }   
}