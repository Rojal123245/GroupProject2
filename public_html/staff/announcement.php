<?php 
	session_start();
	require '../../classes/databaseQuery.php';
	require '../../databaseConnect/connectSQL.php';
	require '../../functions/load-Template-Function.php';
	$active = 1;
	$module = new QueryDatabase($pdo, 'module');
	if (isset($_POST['submit'])) {
		$title = "Thanks";		
		$courseObj = new QueryDatabase($pdo, 'announcement');
		unset($_POST['submit']);
		$record = $_POST;
		$record['staffId'] = $_SESSION['StaffID'];
		if (isset($_GET['p'])) {
			$pk = $_GET['p'];
			$result = $courseObj->update($record, $pk);
		}
		else{
			$result = $courseObj->saveQuery($record);
		}
		$content = "<h3>Announcement has been successfully added.</h3>";
		
	}
	else{
		$title = "Announcement";
		$content = contentLoadingFunction('../../template/staff/announcement-view-template.php', []);
	}
	$templateVars = [
	  'title' => $title,
	  'active' => $active,
		'module' => $module,
	  'content' => $content
	];
	echo contentLoadingFunction('../../template/staff/module-layout.php', $templateVars);

	
?>