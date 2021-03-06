<?php 
	$title = "Add modules";
	require '../../databaseConnect/connectSQL.php';
	if (isset($_POST['submit'])) {
		require '../../classes/databaseQuery.php';
		$moduleObj = new QueryDatabase($pdo, 'module');
		unset($_POST['submit']);
		$record = $_POST;
		if (isset($_GET['p'])) {
			$pk = $_GET['p'];
			$result = $moduleObj->update($record, $pk);
		}
		else{
			$result = $moduleObj->saveQuery($record);
		}
		$content = "<h3>Record had been added</h3>";
	}
	else{
		$content = "Few Errors";
	}
	require '../../template/admin/admin-layout.php';
?>