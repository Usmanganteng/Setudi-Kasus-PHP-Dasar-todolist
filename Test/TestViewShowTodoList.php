<?php

require_once "../view/viewShowTodoList.php";
require_once "../bussinesLogic/addTodoList.php";

addTodoList("Zorro");
addTodoList("Lucifer");
addTodoList("Odin");
addTodoList("Lulu");
addTodoList("Arsen");

viewShowTodoList();