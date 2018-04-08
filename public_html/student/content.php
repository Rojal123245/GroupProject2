<?php 
	require '../../classes/databaseQuery.php';
	require '../../databaseConnect/connectSQL.php';
require '../../functions/load-Template-Function.php';
$title = "Module Content";
$active = 2;
	$module = new QueryDatabase($pdo, 'module');
$content = contentLoadingFunction('../../template/student/content-view-template.php', []);
$templateVars = [
  'title' => $title,
  'active' => $active,
		'module' => $module,
  'content' => $content
];
echo contentLoadingFunction('../../template/student/module-layout.php', $templateVars);
?>