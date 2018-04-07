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
	require '../../databaseConnect/connectSQL.php';
	$title = "Profile";	
	$active = 0;	
	require '../../classes/databaseQuery.php';
	require '../../functions/load-Template-Function.php';
	$module = new QueryDatabase($pdo, 'module');
	$templateVars = [
		'module' => $module
];
	$content = contentLoadingFunction('../../template/staff/profileViewTemplate.php', $templateVars);
	require '../../template/staff/module-layout.php';
	if (isset($_POST['submit'])) {
		$title = "Thanks";
		$staffObj = new QueryDatabase($pdo, 'staff');
		unset($_POST['submit']);
		$record = $_POST;
		$record['pwd'] = strtolower($record['staffFirstName'].$record['staffSurName']);
		if (isset($_GET['p'])) {
			$pk = $_GET['p'];
			$result = $staffObj->update($record, $pk);
			unset($_GET['p']);
		}
		else{
			array_push($record, $record['pwd']);
			unset($record[0]);
			$result = $staffObj->saveQuery($record);
		}
		$content = "<h3>Record had been added</h3>";
		
	}
	else{
		$title = "Error";
		$content = "Few Errors";
	}
?>