<?php
	require '../../databaseConnect/connectSQL.php';
	$page = $_GET['t'];
	$table = new GenerateTableClass();
	$table->settableHeadingToTable(["Id","Student", "Module", "Week1", "Week2", "Week3", "Week4", "Week5","week6", "Week7", "Week8", "Week9", "Week10", "Week11", "Week12","Total Days","Action"]);
	$query = new QueryDatabase($pdo, "attendance");
	$query1 = new QueryDatabase($pdo, "student");;
	$query2 = new QueryDatabase($pdo, "module");
	$stmt=$query->findAll();
	while ($key = $stmt->fetch(PDO::FETCH_ASSOC)) {
		$stmt1 = $query1->findAll('Stid', $key['student_id']);
		$st = $stmt1->fetch();
		$stmt2 = $query2->findAll('module_id', $key['module_id']);
		$st1 = $stmt2->fetch();
		
		$key['student_id'] = $st['studentFirstName']. ' ' .$st['studentSurName'];
		$key['module_id'] = $st1['moduleName'];


		$delete = '<a href="page.php?t='.$page.'&iddel='.$key['attendance_id'].'" style="padding-left: 10px; text-decoration: underline;" onclick="return confirm(\'Do you want to delete this record?\');">Delete</a>';
		array_push($key, $delete);
		
		$table->addRowToTable($key);
	}
	echo $table->getHTMLTemplate();
	if(isset($_GET['iddel'])){
		$delete = $query->delete('attendance_id', $_GET['iddel']);
		header("Refresh:0; url=page.php?t=$page");
	}
?>