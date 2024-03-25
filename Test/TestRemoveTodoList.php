
<?php

require_once "../model/todoList.php";
require_once "../bussinesLogic/addTodoList.php";
require_once "../bussinesLogic/showTodoList.php";
require_once "../bussinesLogic/removeTodoList.php";

addTodoList("Satanael");
addTodoList("Odin");
addTodoList("Asura");
addTodoList("Lucifer");
addTodoList("Metatron");

showTodoList();

removeTodoList(3);

showTodoList();

$success = removeTodoList(4);
var_dump($success);
