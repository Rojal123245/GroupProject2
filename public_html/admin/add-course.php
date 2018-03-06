<?php 
	require '../../classes/databaseQuery.php';
	require '../../databaseConnect/connectSQL.php';
	if (isset($_POST['submit'])) {
		$title = "Thanks";		
		$courseObj = new QueryDatabase($pdo, 'course');
		unset($_POST['submit']);
		$record = $_POST;
		if (isset($_GET['p'])) {
			$pk = $_GET['p'];
			$result = $courseObj->update($record, $pk);
		}
		else{
			$result = $courseObj->saveQuery($record);
		}
		$content = "<h3>Course has been successfully added.</h3>";
		
	}
	else{
		$title = "Error";
		$content = "Few Errors";
	}
	require '../../template/admin/admin-layout.php';
?>