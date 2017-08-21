# CRUDsystem-MVC-

<?php
class model{
	public $id;
	public $name;
	public $price;
	public $keyword;


	public function mod($id,$name,$price,$keyword){
		try{
		$db = new PDO('mysql:host=localhost;dbname=shop11;charset=utf8','root','root');

		$db->beginTransaction();
		$sql = 'INSERT INTO pro(id,name,price,keyword) VALUES(?,?,?,?)';
		$stmt = $db->prepare($sql);
		$stmt->bindValue(1,$id);
		$stmt->bindValue(2,$name);
		$stmt->bindValue(3,$price);
		$stmt->bindValue(4,$keyword);
		$stmt->execute();
		print '挿入完了しました';

		$db->commit();
	}catch(PDOException $bb){
		print $bb;
	}

	}
}
?>
