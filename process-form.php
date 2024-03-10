<?php

$name = $_POST["name"];
$message = $_POST["message"];
$priority = $_POST["priority"];
$type = $_POST["type"];
$terms = filter_input(INPUT_POST, "terms", FILTER_VALIDATE_BOOL);

//$_POST["terms"];

var_dump($name,$message,$priority,$type,$terms);


//print_r($_POST);
