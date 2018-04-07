<?php 
	$_SESSION['staffId'] = 4503;
	require '../../classes/databaseQuery.php';
	require '../../databaseConnect/connectSQL.php';
	require '../../functions/load-Template-Function.php';
	$title = "Welcome";
	$student = new QueryDatabase($pdo, 'student');
	$course = new QueryDatabase($pdo, 'course');
	$module = new QueryDatabase($pdo, 'module');
	$staff = new QueryDatabase($pdo, 'staff');
	$announcement = new QueryDatabase($pdo, 'announcement');
	$discussion = new QueryDatabase($pdo, 'discussion');
	$templateVars = [
		'title' => $title,
		'course' => $course,
		'student' => $student,
		'module' => $module,
		'staff' => $staff,
		'discussion' => $discussion,
		'announcement' => $announcement
	];
	echo contentLoadingFunction('../../template/staff/staff_layout.php', $templateVars);
?>