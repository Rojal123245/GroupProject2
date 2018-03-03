<?php
	require '../../databaseConnect/connectSQL.php';
	$table = new GenerateTableClass();
	$table->settableHeadingToTable(["Id", "Course Name", "Degree"]);
	$query = new QueryDatabase($pdo, "course");
	$stmt = $query->findAll();
	while ($key = $stmt->fetch(PDO::FETCH_ASSOC)) {
		$table->addRowToTable($key);
	}
	echo $table->getHTMLTemplate();

	
?>