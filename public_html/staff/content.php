<?php 
session_start();
require '../../functions/load-Template-Function.php';
$title = "Module Content";
$active = 2;
$content = contentLoadingFunction('../../template/staff/content-view-template.php', []);
$templateVars = [
  'title' => $title,
  'active' => $active,
  'content' => $content
];
echo contentLoadingFunction('../../template/staff/module-layout.php', $templateVars);
?>