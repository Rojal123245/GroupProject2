<?php 

	require '../../classes/databaseQuery.php';
	require '../../databaseConnect/connectSQL.php';
	if (isset($_POST['submit'])) {
		$title = "Thanks";
		$studentObj = new QueryDatabase($pdo, 'student');
		unset($_POST['submit']);
		$record = $_POST;
		if (isset($_GET['p'])) {
			$pk = $_GET['p'];
			$result = $studentObj->update($record, $pk);
		}
		else{
			$result = $studentObj->saveQuery($record);
		}
		$content = "<h3>Record had been added</h3>";
		
	}
	else{
		$title = "Error";
		$content = "Few Errors";
	}
	require '../../template/admin/admin-layout.php';
?>