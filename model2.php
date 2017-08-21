# CRUDsystem-MVC-

<?php
class model2{
	public function mod2(){
		try{
			$db = new PDO('mysql:host=localhost;dbname=shop11;charset=utf8','root','root');
			$db->beginTransaction();
			$sql = 'SELECT * FROM pro ORDER BY id DESC';
			$stmt = $db->prepare($sql);
			$stmt->execute();
			
			$db->commit();
			while($rec = $stmt->fetch(PDO::FETCH_ASSOC)){
			print '<tr>';
			print '<td>'.$rec['id'].'</td>';
			print '<td>'.$rec['name'].'</td>';
			print '<td>'.$rec['price'].'</td>';
			print '<td>'.$rec['keyword'].'</td>';
			print '</tr>';
		}



		}catch(PDOException $bb){
			print $bb;
		}

	}
}

?>
