<?php 
require '../../classes/databaseQuery.php';
require '../../databaseConnect/connectSQL.php';
require '../../functions/load-Template-Function.php';
$module = new QueryDatabase($pdo, 'module');
$announcement = new QueryDatabase($pdo, 'announcement');
$title = "Announcement";
$active = 1;
$templateVars = [
'announcement' => $announcement
];
$content = contentLoadingFunction('../../template/student/announcement-view-template.php', $templateVars);
$templateVars = [
'title' => $title,
'active' => $active,
'module' => $module,
'content' => $content
];
echo contentLoadingFunction('../../template/student/module-layout.php', $templateVars);
?>