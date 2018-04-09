<?php 
session_start();
require '../../classes/databaseQuery.php';
require '../../databaseConnect/connectSQL.php';
require '../../functions/load-Template-Function.php';
$title = "Assignment";
$active = 3;
$submit = new QueryDatabase($pdo, 'submit');
$module = new QueryDatabase($pdo, 'module');
	if(isset($_POST["sub"])) {
		unset($_POST['sub']);
		$_POST['staff_id'] = $_SESSION['StaffID'];
		$ass = $submit->update($_POST, 'assignment_id');
		$content = "Grade Given";
	}
print_r($_POST);
$templateVars = [
  'title' => $title,
  'active' => $active,
'module' => $module,
  'content' => $content
];
echo contentLoadingFunction('../../template/staff/module-layout.php', $templateVars);
?>
