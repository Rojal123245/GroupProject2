<?php 
	if (isset($_POST['submit'])) {
		$title = "Thanks";
		$studentObj = new QueryDatabase($pdo, 'student');
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