<?php 
	$title = "Thanks";
	require '../../databaseConnect/connectSQL.php';
	if (isset($_POST['submit'])) {
		require '../../classes/databaseQuery.php';
		$studentObj = new QueryDatabase($pdo, 'student');
		unset($_POST['submit']);
		$record = $_POST;
		$result = $studentObj->saveQuery($record);
		$content = "<h3>Record had been added</h3>";
		
	}
	else{
		$content = "Few Errors";
	}
	require '../../template/admin/admin-layout.php';
?>