<?php

require_once "../model/todoList.php";
require_once "../view/viewRemoveTodoList.php";
require_once "../bussinesLogic/addTodoList.php";
require_once "../bussinesLogic/showTodoList.php";

addTodoList("Thor");
addTodoList("Loki");
addTodoList("Hela");
addTodoList("Lucian");

showTodoList();

viewAddTodoList();

showTodoList();