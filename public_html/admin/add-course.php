<?php 
	require '../../databaseConnect/connectSQL.php';
	if (isset($_POST['submit'])) {
		$title = "Thanks";
		require '../../classes/databaseQuery.php';
		$courseObj = new QueryDatabase($pdo, 'course');
		unset($_POST['submit']);
		$record = $_POST;
		$result = $courseObj->saveQuery($record);
		$content = "<h3>Course has been successfully added.</h3>";
		
	}
	else{
		$title = "Error";
		$content = "Few Errors";
	}
	require '../../template/admin/admin-layout.php';
?>