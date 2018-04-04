<?php 
	require '../../functions/load-Template-Function.php';
$title = "Discussion Panel";
$active = 4;
$content = contentLoadingFunction('../../template/student/discussion-view-template.php', []);
$templateVars = [
	'title' => $title,
	'active' => $active,
	'content' => $content
];
echo contentLoadingFunction('../../template/student/module-layout.php', $templateVars);
?>
