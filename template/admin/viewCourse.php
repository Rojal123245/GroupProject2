<?php
	require '../../databaseConnect/connectSQL.php';
	require '../../classes/table-generate-function.php';
	$table = new GenerateTableClass();
	$table->settableHeadingToTable(["Id", "Course Name", "Degree"]);
	require '../../classes/databaseQuery.php';
	$query = new QueryDatabase($pdo, "course");
	$stmt = $query->findAll();
	while ($key = $stmt->fetch(PDO::FETCH_ASSOC)) {
		$table->addRowToTable($key);
	}
	echo $table->getHTMLTemplate();

	
?>