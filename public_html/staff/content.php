<?php 
session_start();
	require '../../classes/databaseQuery.php';
	require '../../databaseConnect/connectSQL.php';
require '../../functions/load-Template-Function.php';
$title = "Module Content";
$active = 2;
$content = contentLoadingFunction('../../template/staff/content-view-template.php', []);
	$module = new QueryDatabase($pdo, 'module');
$templateVars = [
  'title' => $title,
  'active' => $active,
		'module' => $module,
  'content' => $content
];
echo contentLoadingFunction('../../template/staff/module-layout.php', $templateVars);
?>