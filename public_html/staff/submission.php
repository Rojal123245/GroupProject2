<?php 
session_start();
require '../../classes/databaseQuery.php';
require '../../databaseConnect/connectSQL.php';
require '../../functions/load-Template-Function.php';
$title = "Assignment";
$active = 3;
$assignment = new QueryDatabase($pdo, 'assignment');
$module = new QueryDatabase($pdo, 'module');
	if(isset($_POST["create"])) {
		unset($_POST['create']);
		$_POST['link'] = 'yes';
		$assignmentId = $_POST['assignment_id'];
		$ass = $assignment->update($_POST, 'assignment_id');
		$content = "Link Created";
	}
$templateVars = [
  'title' => $title,
  'active' => $active,
		'module' => $module,
  'content' => $content
];
echo contentLoadingFunction('../../template/staff/module-layout.php', $templateVars);
?>
