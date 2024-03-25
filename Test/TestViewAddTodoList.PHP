
<?php

require_once "../view/viewAddTodoList.php";
require_once "../bussinesLogic/showTodoList.php";
require_once "../bussinesLogic/addTodoList.php";

addTodoList("Alice");
addTodoList("Attis");
addTodoList("Ardha");

viewAddTodoList();

showTodoList();

viewAddTodoList();

showTodoList();
