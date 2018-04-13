<?php 
	require '../../databaseConnect/connectSQL.php';
	require '../../classes/databaseQuery.php';
	if (isset($_POST['submit'])) {
		$title = "Thanks";
		$patObj = new QueryDatabase($pdo, 'patManagement');
		unset($_POST['submit']);
		$record = $_POST;
		if (isset($_GET['p'])) {
			$pk = $_GET['p'];
			$result = $patObj->update($record, $pk);
		}
		else{
			$result = $patObj->saveQuery($record);
		}
		$content = "<h3>PAT has been successfully added.</h3>";
	}
	else{
		$title = "Error";
		$content = "Few Errors";
	}
	require '../../template/admin/admin-layout.php';
?>