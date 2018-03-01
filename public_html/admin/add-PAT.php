<?php 
	require '../../databaseConnect/connectSQL.php';
	if (isset($_POST['submit'])) {
		require '../../classes/databaseQuery.php';
		$staffObj = new QueryDatabase($pdo, 'staff');
		unset($_POST['submit']);
		$record = $_POST;
		$result = $staffObj->find("staffFirstName", $_POST['tutorfName']);
		$result1 = $staffObj->find("staffSurName", $_POST['tutorlName']);
		$getRow = $result->fetch();
		$getRow1 = $result1->fetch();
		if($getRow == true && $getRow1 == true){
			
		}
		else{
			echo "error";
		}
	}
?>