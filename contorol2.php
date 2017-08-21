# CRUDsystem-MVC-

<?php

$id = $_POST['id'];
$name = $_POST['name'];
$price = $_POST['price'];
$keyword = $_POST['keyword'];

require 'model.php';

$b = new model;
$b->mod($id,$name,$price,$keyword);

?>
