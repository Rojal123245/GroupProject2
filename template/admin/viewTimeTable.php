<?php
	require '../../databaseConnect/connectSQL.php';
	$page = $_GET['t'];
	$table = new GenerateTableClass();
	$table->settableHeadingToTable(["Id", "Tutor", "Module","Time","Room No", "Day", "Level", "L Or T","Delete"]);
	$query = new QueryDatabase($pdo, "timetable");
	$queryStaff = new QueryDatabase($pdo, "staff");
	$queryModule = new QueryDatabase($pdo, "module");
	$stmt = $query->findAll();
	while ($key = $stmt->fetch(PDO::FETCH_ASSOC)) {
		$stmt1 = $queryModule->findAll('module_id', $key['moduleId']);
		$st = $stmt1->fetch();
		$stmt2 = $queryStaff->find('staffId', $key['tutorId']);
		$st1 = $stmt2->fetch();
		
		$key['tutorId'] = $st1['staffFirstName']. ' ' .$st1['staffSurName'];
		$key['moduleId'] = $st['moduleName'];
		$delete = '<a href="page.php?t='.$page.'&iddel='.$key['timetable_id'].'" style="padding-left: 10px; text-decoration: underline;" onclick="return confirm(\'Do you want to delete this record?\');">Delete</a>';

		array_push($key, $delete);
		$table->addRowToTable($key);
	}
	echo $table->getHTMLTemplate();
	if(isset($_GET['iddel'])){
		$delete = $query->delete('pat_id', $_GET['iddel']);
		header("Refresh:0; url=page.php?t=$page");
	}
?>
