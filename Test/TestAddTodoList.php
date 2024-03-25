
<?php

require_once "../model/todoList.php";
require_once "../bussinesLogic/addTodoList.php";

addTodoList("Muhamad");
addTodoList("Aldizar");
addTodoList("Ilham");

var_dump($todoList);
