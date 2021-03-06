<?php 
	require '../../classes/databaseQuery.php';
	require '../../databaseConnect/connectSQL.php';
	if (isset($_POST['submit'])) {
		$title = "Thanks";
		$staffObj = new QueryDatabase($pdo, 'staff');
		unset($_POST['submit']);
		$record = $_POST;
		$record['pwd'] = strtolower($record['staffFirstName'].$record['staffSurName']);
		if (isset($_GET['p'])) {
			$pk = $_GET['p'];
			$result = $staffObj->update($record, $pk);
		}
		else{
			array_push($record, $record['pwd']);
			unset($record[0]);
			$result = $staffObj->saveQuery($record);
		}
		$content = "<h3>Record had been added</h3>";
		
	}
	else{
		$title = "Error";
		$content = "Few Errors";
	}
	require '../../template/admin/admin-layout.php';
?>