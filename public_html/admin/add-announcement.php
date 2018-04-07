<?php 
	session_start();
	require '../../classes/databaseQuery.php';
	require '../../databaseConnect/connectSQL.php';
	if (isset($_POST['submit'])) {
		$title = "Thanks";		
		$courseObj = new QueryDatabase($pdo, 'announcement');
		unset($_POST['submit']);
		$record = $_POST;
		$record['staffId'] = $_SESSION['adminId'];
		if (isset($_GET['p'])) {
			$pk = $_GET['p'];
			$result = $courseObj->update($record, $pk);
		}
		else{
			$result = $courseObj->saveQuery($record);
		}
		$content = "<h3>Announcement has been successfully added.</h3>";
		
	}
	else{
		$title = "Error";
		$content = "Few Errors";
	}
	require '../../template/admin/admin-layout.php';
?>