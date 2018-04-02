<?php 
	require '../../classes/databaseQuery.php';
	require '../../databaseConnect/connectSQL.php';
	require '../../functions/load-Template-Function.php';
	$title = "Welcome";
	$student = new QueryDatabase($pdo, 'student');
	$course = new QueryDatabase($pdo, 'course');
	$module = new QueryDatabase($pdo, 'module');
	$staff = new QueryDatabase($pdo, 'staff');
	$templateVars = [
		'title' => $title,
		'course' => $course,
		'student' => $student,
		'module' => $module,
		'staff' => $staff
	];
	// require '../../template/student/student_layout.php';
	echo contentLoadingFunction('../../template/student/student_layout.php', $templateVars);
?>