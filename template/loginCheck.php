<?php 
	require '../classes/databaseQuery.php';
	require '../databaseConnect/connectSQL.php';
	require '../functions/load-Template-Function.php';
	if (isset($_POST['submit'])) {
		unset($_POST['submit']);
		$login = new QueryDatabase($pdo, '');
	}
?>