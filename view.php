# CRUDsystem-MVC-

<?php
require 'contorol3.php';
$c = new ind;
$c->in();

require 'model2.php';
$ee = new model2;
$ee->mod2();

?>
<p><a href = "input.php">入力画面に移動</a></p>
<p><a href = "update.php">編集画面に移動</a></p>
<p><a href = "delete.php">削除する</a></p>
