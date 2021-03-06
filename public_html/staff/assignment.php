<?php 
session_start();
	require '../../classes/databaseQuery.php';
	require '../../databaseConnect/connectSQL.php';
require '../../functions/load-Template-Function.php';
$title = "Assignment";
$active = 3;
$assignment = new QueryDatabase($pdo, 'assignment');
$submit = new QueryDatabase($pdo, 'submit');
$student = new QueryDatabase($pdo, 'student'); 
$templateVars = [
	'assignment' => $assignment,
	'submit' => $submit,
	'student' => $student
];
$content = contentLoadingFunction('../../template/staff/assignment-view-template.php', $templateVars);
	$module = new QueryDatabase($pdo, 'module');
	if(isset($_POST["submit"])) {
		unset($_POST['submit']);
		$assignmentDir = "../../assignment/";
		$module_id = $_GET['id'];
		//Concatenate image name with directory
		$file = $assignmentDir . basename($_FILES["upload"]["name"]);
		$fileDir = "assignment/".basename($_FILES["upload"]["name"]);
		//Copy into newImage folder 
	    copy(($_FILES["upload"]["tmp_name"]), $file);
	    //Insert file name into database
	    $assignmentQuery = $pdo->prepare("INSERT INTO assignment(filePath, module_id, descrip) VALUES (:fileDir, :module_id, :descrip)");
	    $criteria = [
	    	'fileDir' => $fileDir,
	    	'module_id' => $_POST['module_id'],
	    	'descrip' => $_POST['descrip']
	    ];
	 	$insert = $assignmentQuery->execute($criteria);
	 	header('Refresh:0');
	}
$templateVars = [
  'title' => $title,
  'active' => $active,
		'module' => $module,
  'content' => $content
];
echo contentLoadingFunction('../../template/staff/module-layout.php', $templateVars);
?>
