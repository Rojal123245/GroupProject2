<?php 
session_start();
	require '../../classes/databaseQuery.php';
	require '../../databaseConnect/connectSQL.php';
require '../../functions/load-Template-Function.php';
$title = "Submit";
$active = 3;
$assignment = new QueryDatabase($pdo, 'assignment');
$submit = new QueryDatabase($pdo, 'submit');
$templateVars = [
	'assignment' => $assignment,
	'submit' => $submit
];
$content = contentLoadingFunction('../../template/student/assignment-view-template.php', $templateVars);
	$module = new QueryDatabase($pdo, 'module');
	if(isset($_POST["submit"])) {
		unset($_POST['submit']);
		$assignmentDir = "../../submit/";
		$student_id = $_SESSION['StudentID'];
		//Concatenate image name with directory
		$file = $assignmentDir . basename($_FILES["upload"]["name"]);
		$fileDir = "submit/".basename($_FILES["upload"]["name"]);
		//Copy into newImage folder 
	    copy(($_FILES["upload"]["tmp_name"]), $file);
	    //Insert file name into database
	    $assignmentQuery = $pdo->prepare("INSERT INTO submit(file_Path, student_id, descrip, assignment_id) VALUES (:fileDir, :student_id, :descrip, :assignment_id)");
	    $criteria = [
	    	'fileDir' => $fileDir,
	    	'student_id' => $student_id,
	    	'descrip' => $_POST['descrip'],
	    	'assignment_id' => $_POST['assignment_id']
	    ];
	 	$insert = $assignmentQuery->execute($criteria);
	}
$templateVars = [
  'title' => $title,
  'active' => $active,
		'module' => $module,
  'content' => $content
];
echo contentLoadingFunction('../../template/student/module-layout.php', $templateVars);
?>
