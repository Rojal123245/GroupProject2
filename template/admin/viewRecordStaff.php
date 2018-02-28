<?php
	require '../../databaseConnect/connectSQL.php';
	require '../../classes/table-generate-function.php';
	$table = new GenerateTableClass();
	$table->settableHeadingToTable(["Id", "First Name", "Middle Name", "Last Name", "Email", "Address", "Phone Number", "Role", "Specialist Subject", "Status", "Dormacy Reason", "Gender"]);
	require '../../classes/databaseQuery.php';
	$query = new QueryDatabase($pdo, "staff");
	$stmt = $query->findAll();
	while ($key = $stmt->fetch(PDO::FETCH_ASSOC)) {
		$table->addRowToTable($key);
	}
	echo $table->getHTMLTemplate();
?>