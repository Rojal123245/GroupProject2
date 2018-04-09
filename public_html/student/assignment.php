<?php 
session_start();
	require '../../classes/databaseQuery.php';
	require '../../databaseConnect/connectSQL.php';
require '../../functions/load-Template-Function.php';
$title = "Assignment";
$active = 3;
$assignment = new QueryDatabase($pdo, 'assignment');
$submit = new QueryDatabase($pdo, 'submit');
$templateVars = [
	'assignment' => $assignment,
	'submit' => $submit
];
$content = contentLoadingFunction('../../template/student/assignment-view-template.php', $templateVars);
	$module = new QueryDatabase($pdo, 'module');
$templateVars = [
  'title' => $title,
  'active' => $active,
		'module' => $module,
  'content' => $content
];
echo contentLoadingFunction('../../template/student/module-layout.php', $templateVars);
?>
