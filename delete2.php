# CRUDsystem-MVC-

<?php
require 'deletemodel.php';
$d = new deletemodel;
$d->del($id);
?>
<p><a href = "view.php">一覧を見る</a></p>
