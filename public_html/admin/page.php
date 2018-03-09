<?php 
	$table = $_GET['t'];
	require '../../functions/load-Template-Function.php';
	if('a'.sha1("Student") == $table){
		$templateVars = [
			'title' => "Add Student Record",
			'content' => contentLoadingFunction('../../template/admin/addStudentForm.php', [])
		];	
	}
	else if('v'.sha1("Student") == $table){
		$templateVars = [
			'title' => "View Student Record",
			'content' => contentLoadingFunction('../../template/admin/viewRecordStudent.php', [])
		];
	}
	else if('a'.sha1("Staff") == $table){
		$templateVars = [
			'title' => "Add Staff Record",
			'content' => contentLoadingFunction('../../template/admin/addStaffForm.php', [])
		];	
	}
	else if('v'.sha1("Staff") == $table){
		$templateVars = [
			'title' => "View Staff Record",
			'content' => contentLoadingFunction('../../template/admin/viewRecordStaff.php', [])
		];
	}
	else if('a'.sha1("Courses") == $table){
		$templateVars = [
			'title' => "Add Course",
			'content' => contentLoadingFunction('../../template/admin/addCourseForm.php', [])
		];	
	}
	else if('v'.sha1("Staff") == $table){
		$templateVars = [
			'title' => "View Course",
			'content' => contentLoadingFunction('../../template/admin/viewRecordStaff.php', [])
		];
<<<<<<< HEAD
	}
	else if('a'.sha1("Modules") == $table){
		$templateVars = [
			'title' => "Add Modules",
			'content' => contentLoadingFunction('../../template/admin/addModuleForm.php', [])
		];	
	}
	else if('v'.sha1("Modules") == $table){
		$templateVars = [
			'title' => "View Course",
			'content' => contentLoadingFunction('../../template/admin/viewModule.php', [])
		];
	}
	else if('a'.sha1("Personal Tutor Management") == $table){
=======
	}else if('a'.sha1("Modules") == $table){
>>>>>>> 97a012958e944b94e4ff1f690f61bb9a058a613a
		$templateVars = [
			'title' => "Add Module",
			'content' => contentLoadingFunction('../../template/admin/addModuleForm.php', [])
		];
	}
	else if('a'.sha1("Patmanagements") == $table){
		$templateVars = [
			'title' => "Add PAT",
			'content' => contentLoadingFunction('../../template/admin/addPATForm.php', [])
		];
	}
<<<<<<< HEAD
	else if('a'.sha1("Attendance Records") == $table){
		$templateVars = [
			'title' => "Create Attendance",
			'content' => contentLoadingFunction('../../template/admin/createAttendance.php', [])
		];	
	}
	else if('v'.sha1("Attendance Records") == $table){
		$templateVars = [
			'title' => "View Attendance",
			'content' => contentLoadingFunction('../../template/admin/viewAttendance.php', [])
		];
	}

=======
>>>>>>> 97a012958e944b94e4ff1f690f61bb9a058a613a
	$html = contentLoadingFunction('../../template/admin/admin-layout.php', $templateVars);
	echo $html;
?>