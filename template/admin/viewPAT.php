<?php
	require '../../databaseConnect/connectSQL.php';
	$page = $_GET['t'];
	$table = new GenerateTableClass();
	$table->settableHeadingToTable(["Id", "Tutor", "Student", "Delete"]);
	$query = new QueryDatabase($pdo, "patManagement");
	$queryStudent = new QueryDatabase($pdo, "student");
	$queryStaff = new QueryDatabase($pdo, "staff");
	$stmt = $query->findAll();
	while ($key = $stmt->fetch(PDO::FETCH_ASSOC)) {
		$stmt1 = $queryStudent->find('Stid', $key['Stid']);
		$st = $stmt1->fetch();
		$stmt2 = $queryStaff->find('staffId', $key['staffId']);
		$st1 = $stmt2->fetch();
		$key['Stid'] = $st['studentFirstName']. ' ' .$st['studentSurName'];
		$key['staffId'] = $st1['staffFirstName']. ' ' .$st1['staffSurName'];
		$delete = '<a href="page.php?t='.$page.'&iddel='.$key['pat_id'].'" style="padding-left: 10px; text-decoration: underline;" onclick="return confirm(\'Do you want to delete this record?\');">Delete</a>';
		array_push($key, $delete);
		$table->addRowToTable($key);
	}
	echo $table->getHTMLTemplate();
	if(isset($_GET['iddel'])){
		$delete = $query->delete('pat_id', $_GET['iddel']);
		header("Refresh:0; url=page.php?t=$page");
	}
?>
