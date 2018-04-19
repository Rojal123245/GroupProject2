<?php 
session_start();
	require '../../classes/databaseQuery.php';
	require '../../databaseConnect/connectSQL.php';
require '../../functions/load-Template-Function.php';
$title = "Attendance";
$active = 5;
$attendance = new QueryDatabase($pdo, 'attendance');
$student = new QueryDatabase($pdo, 'student'); 
$templateVars = [
	'attendance' => $attendance,
	'student' => $student
];


$content = contentLoadingFunction('../../template/staff/attendance-view-template.php', $templateVars);
	$module = new QueryDatabase($pdo, 'module');

$templateVars = [
  'title' => $title,
  'active' => $active,
		'module' => $module,
  'content' => $content
];
echo contentLoadingFunction('../../template/staff/module-layout.php', $templateVars);
?>