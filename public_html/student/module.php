<?php 
	require '../../classes/databaseQuery.php';
	require '../../databaseConnect/connectSQL.php';
	require '../../functions/load-Template-Function.php';
$title = "About this module";
$active = 0;
	$module = new QueryDatabase($pdo, 'module');
$content = contentLoadingFunction('../../public_html/student/overview.php', []);
$templateVars = [
	'title' => $title,
	'active' => $active,
		'module' => $module,
	'content' => $content
];
echo contentLoadingFunction('../../template/student/module-layout.php', $templateVars);
?>