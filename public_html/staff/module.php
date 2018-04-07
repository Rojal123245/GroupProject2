<?php 
	require '../../classes/databaseQuery.php';
	require '../../databaseConnect/connectSQL.php';
	require '../../functions/load-Template-Function.php';
$title = "About this module";
$active = 0;
$content = contentLoadingFunction('../../public_html/student/overview.php', []);
	$module = new QueryDatabase($pdo, 'module');
$templateVars = [
	'title' => $title,
	'active' => $active,
	'module' => $module,
	'content' => $content
];
echo contentLoadingFunction('../../template/staff/module-layout.php', $templateVars);
?>