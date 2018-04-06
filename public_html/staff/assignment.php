<?php 
session_start();
require '../../functions/load-Template-Function.php';
$title = "Assignment";
$active = 3;
$content = contentLoadingFunction('../../template/student/assignment-view-template.php', []);
$templateVars = [
  'title' => $title,
  'active' => $active,
  'content' => $content
];
echo contentLoadingFunction('../../template/staff/module-layout.php', $templateVars);
?>
