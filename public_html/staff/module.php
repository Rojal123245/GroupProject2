<?php 
	require '../../functions/load-Template-Function.php';
$title = "About this module";
$active = 0;
$content = contentLoadingFunction('../../public_html/student/overview.php', []);
$templateVars = [
	'title' => $title,
	'active' => $active,
	'content' => $content
];
echo contentLoadingFunction('../../template/staff/module-layout.php', $templateVars);
?>