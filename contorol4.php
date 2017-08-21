# CRUDsystem-MVC-

<p>編集画面</p>
<?php
class update{
	public function up()
	{
?>
<form action  = "update2.php" method = "post">
	<dt>id</dt>
	<dd>
		<input type  = "text" name = "id">
	</dd>
	<dt>名前</dt>
	<dd>
		<input type = "text" name = "name">
	</dd>
	<dt>価格</dt>
	<dd>
		<input type = "text" name = "price">
	</dd>
	<dt>キーワード</dt>
	<dd>
		<input type  = "text" name = "keyword">
	</dd>
	<input type = "submit" value = "送信する">
</form>
<?php
}
}
?>
