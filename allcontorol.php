# CRUDsystem-MVC-
<?php
$name = array($_POST['1'],$_POST['2'],$_POST['3']);

class cont{
	public $name;
	public function co($name){

		if($_POST['1'] == 'on'){
			header('Location:input.php');
		}
		elseif($_POST['2'] == 'on'){
			header('Location:update.php');
		}
		elseif($_POST['3'] == 'on'){
			header('Location:delete.php');
		}else{
			header('Location:view.php');
		}
	}
}
$a = new cont;
$a->co($name);
?>
