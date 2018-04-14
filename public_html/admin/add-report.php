<?php 
	require '../../classes/databaseQuery.php';
	require '../../databaseConnect/connectSQL.php';
	if (isset($_POST['submit'])) {
		$title = "Thanks";		
		$reportObj = new QueryDatabase($pdo, 'report');
		unset($_POST['submit']);
		$record = $_POST;
		if (isset($_GET['p'])) {
			$pk = $_GET['p'];
			$result = $reportObj->update($record, $pk);
		}
		else{
			$result = $reportObj->saveQuery($record);
		}
		$content = "<h3>Report has been successfully added.</h3>";
		
	}
	else{
		$title = "Error";
		$content = "Few Errors";
	}
	require '../../template/admin/admin-layout.php';
?>