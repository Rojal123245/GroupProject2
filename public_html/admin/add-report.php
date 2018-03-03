<?php 
	if (isset($_POST['submit'])) {
		$title = "Successful";
		$reportObj = new QueryDatabase($pdo, 'report');
		unset($_POST['submit']);
		$record = $_POST;
		$result = $reportObj->saveQuery($record);
		$content = "<h3>Report has been created.</h3>";
	}
	else{
		$title = "Error";
		$content = "Few Errors";
	}

	require '../../template/admin/admin-layout.php';
?>