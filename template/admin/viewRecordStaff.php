<?php
	require '../../databaseConnect/connectSQL.php';
	$table = new GenerateTableClass();
	$table->settableHeadingToTable(["Id", "First Name", "Middle Name", "Last Name", "Email", "Address", "Phone Number", "Role", "Specialist Subject", "Status", "Dormacy Reason", "Gender"]);
	$query = new QueryDatabase($pdo, "staff");
	$stmt = $query->findAll();
	while ($key = $stmt->fetch(PDO::FETCH_ASSOC)) {
		$table->addRowToTable($key);
	}
	echo $table->getHTMLTemplate();
?>