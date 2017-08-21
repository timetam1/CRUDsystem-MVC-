# CRUDsystem-MVC-

<?php
$id = $_POST['id'];
$name = $_POST['name'];
$price = $_POST['price'];
$keyword = $_POST['keyword'];

class upmodel{
	public $id;
	public $name;
	public $price;
	public $keyword;

	public function upm($id,$name,$price,$keyword){
		try{
			$db = new PDO('mysql:host=localhost;dbname=shop11;charset=utf8','root','root');
			$db->beginTransaction();
			$sql = 'UPDATE pro SET name=?,price=?,keyword=? WHERE id=?';
			$stmt = $db->prepare($sql);
			$stmt->bindValue(1,$name);
			$stmt->bindValue(2,$price);
			$stmt->bindValue(3,$keyword);
			$stmt->bindValue(4,$id);
			$stmt->execute();
			$db->commit();
			print '完了しました';

		}catch(PDOException $e){
			print $e;
		}

	}
}

?>
