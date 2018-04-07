<script type="text/javascript">
	function show(){
		 var x = document.getElementById("password-input");
	    if (x.type === "password") {
	        x.type = "text";
	    } else {
	        x.type = "password";
	    }
	}
</script>
<?php 
	require '../../classes/databaseQuery.php';
	require '../../databaseConnect/connectSQL.php';
	$title = "Profile";	
	$active = 0;	
	$module = new QueryDatabase($pdo, 'module');
	$templateVars = [
		'module' => $module
];
	require '../../functions/load-Template-Function.php';
	$content = contentLoadingFunction('../../template/student/profileViewTemplate.php', $templateVars);
	require '../../template/student/module-layout.php';

	if (isset($_POST['submit'])) {
		$title = "Thanks";
		$studentObj = new QueryDatabase($pdo, 'student');
		unset($_POST['submit']);
		$record = $_POST;
		$record['pwd'] = strtolower($record['studentFirstName'].$record['studentSurName']);
		if (isset($_GET['p'])) {
			$pk = $_GET['p'];
			$result = $studentObj->update($record, $pk);
			unset($_GET['p']);
		}
		else{
			array_push($record, $record['pwd']);
			unset($record[0]);
			$result = $studentObj->saveQuery($record);
		}
		$content = "<h3>Record had been added</h3>";
		
	}
	else{
		$title = "Error";
		$content = "Few Errors";
	}
?>