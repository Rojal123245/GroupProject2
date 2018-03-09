<?php 

	$title='add PAT';
	require '../../databaseConnect/connectSQL.php';
	if (isset($_POST['submit'])) {
		$patObj = new QueryDatabase($pdo, 'patmanagement');
		unset($_POST['submit']);
		$record = $_POST;
		$result = $moduleObj->saveQuery($record);
		$content='successfully added';
	}
?>