<?php session_start();
require '../../classes/databaseQuery.php';
require '../../databaseConnect/connectSQL.php';
require '../../functions/load-Template-Function.php';
$title = "Search";
$active = 4;
$module = new QueryDatabase($pdo, 'module');
$discussion = new QueryDatabase($pdo, 'discussion');
$student = new QueryDatabase($pdo, 'student');
$staff = new QueryDatabase($pdo, 'staff');
if (isset($_GET['qs'])) {
	$dis = $discussion->find('discussion_id', $_GET['qs']);
	$dis = $dis->fetch();
	$question = $dis['question'];
}
else{
	$question = $_POST['question'];
}
$templateVars = [
	'staff' => $staff,
	'student' => $student, 
	'question' => $question 
];
$content = contentLoadingFunction('../../template/staff/search-view-template.php', $templateVars);
$templateVars = [
'title' => $title,
'active' => $active,
'module' => $module,
'content' => $content
];
echo contentLoadingFunction('../../template/staff/module-layout.php', $templateVars);
?>
