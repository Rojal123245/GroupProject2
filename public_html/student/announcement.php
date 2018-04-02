<?php 
session_start();
require '../../functions/load-Template-Function.php';
$title = "Announcement";
$active = 1;
$content = contentLoadingFunction('../../template/student/announcement-view-template.php', []);
$templateVars = [
  'title' => $title,
  'active' => $active,
  'content' => $content
];
echo contentLoadingFunction('../../template/student/module-layout.php', $templateVars);
?>