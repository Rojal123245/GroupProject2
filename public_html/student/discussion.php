<?php 
require '../../classes/databaseQuery.php';
require '../../databaseConnect/connectSQL.php';
require '../../functions/load-Template-Function.php';
$title = "Discussion Panel";
$active = 4;
$module = new QueryDatabase($pdo, 'module');
$discussion = new QueryDatabase($pdo, 'discussion');
$student = new QueryDatabase($pdo, 'student');
$staff = new QueryDatabase($pdo, 'staff');
$templateVars = [
	'discussion' => $discussion,
	'staff' => $staff,
	'student' => $student
];
$content = contentLoadingFunction('../../template/student/discussion-view-template.php', $templateVars);
if (isset($_POST['submit'])) {
		$title = "Thanks";		
		$discussion = new QueryDatabase($pdo, 'discussion');
		unset($_POST['submit']);
		$record = $_POST;
		// $record['qs_student_id'] = $_SESSION['Stid'];
		$record['qs_student_id'] = 17421492;
		$result = $discussion->saveQuery($record);
		$content = "<h3>Thanks for your valuable query.</h3>";
		
	}
$templateVars = [
'title' => $title,
'active' => $active,
'module' => $module,
'content' => $content
];
echo contentLoadingFunction('../../template/student/module-layout.php', $templateVars);
?>
