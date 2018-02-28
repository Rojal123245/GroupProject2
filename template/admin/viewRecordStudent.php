<?php
	require '../../databaseConnect/connectSQL.php';
	require '../../classes/table-generate-function.php';
	$table = new GenerateTableClass();
	$table->settableHeadingToTable(["Id", "First Name", "Middle Name", "Last Name", "Email", "Term Time Address", "Non Term Time Address", "Phone Number", "Course Code", "Qualification", "Gender", "Status", "Dormacy Reason"]);
	require '../../classes/databaseQuery.php';
	$query = new QueryDatabase($pdo, "student");
	$stmt = $query->findAll();
	while ($key = $stmt->fetch(PDO::FETCH_ASSOC)) {
		$table->addRowToTable($key);
	}
	echo $table->getHTMLTemplate();
?>