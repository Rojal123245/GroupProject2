<?php 
	require '../classes/databaseQuery.php';
	require '../databaseConnect/connectSQL.php';
	require '../functions/load-Template-Function.php';
	session_start();

	if (isset($_POST['submit'])) {
		unset($_POST['submit']);
		$check = false;
		$new_id = $_POST['username'];
		$login = new QueryDatabase($pdo, 'student');
		$result = $login->find('Stid', $new_id);
		if($result->rowCount() > 0){
			$check = true;
			$user99 = $result->fetch();
			if($_POST['pwd']== $user99['pwd']){
				$_SESSION['StudentID'] = $user99['Stid'];
				//storing in session
				header('location:../public_html/student/index.php');//direct to main page
			}
		}
		if($check == false){
			$stafflogin = new QueryDatabase($pdo, 'staff');
			$staffresult = $stafflogin->find('staffId', $new_id);
			if($staffresult->rowCount() > 0){
				$staffuser = $staffresult->fetch();
				if($_POST['pwd']== $staffuser['pwd']){
					$_SESSION['StaffID'] = $staffuser['staffId'];//storing in session
					header('location:../public_html/staff/index.php');//direct to main page
				}
			}
		}
	}
?>
