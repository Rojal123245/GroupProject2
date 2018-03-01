<?php 
	require '../../databaseConnect/connectSQL.php';
	if (isset($_POST['submit'])) {
		$title = "Thanks";
		require '../../classes/databaseQuery.php';
		$studentObj = new QueryDatabase($pdo, 'staff');
		unset($_POST['submit']);
		$record = $_POST;
		$result = $studentObj->saveQuery($record);
		$content = "<h3>Record had been added</h3>";
		
	}
	else{
		$title = "Error";
		$content = "Few Errors";
	}
	require '../../template/admin/admin-layout.php';
?>