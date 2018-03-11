<?php 
	require '../../databaseConnect/connectSQL.php';
	require '../../classes/databaseQuery.php';
	require '../../classes/table-generate-function.php';
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
	else if('v'.sha1("Courses") == $table){
		$templateVars = [
			'title' => "View Course",
			'content' => contentLoadingFunction('../../template/admin/viewCourse.php', [])
		];
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
		$templateVars = [
			'title' => "Add Personal Tutor",
			'content' => contentLoadingFunction('../../template/admin/addPATForm.php', [])
		];	
	}
	else if('v'.sha1("Personal Tutor Management") == $table){
		$templateVars = [
			'title' => "View Personal Tutor",
			'content' => contentLoadingFunction('../../template/admin/viewPAT.php', [])
		];
	}
	else if('a'.sha1("Report") == $table){
		$templateVars = [
			'title' => "Create Report",
			'content' => contentLoadingFunction('../../template/admin/createReport.php', [])
		];	
	}
	else if('v'.sha1("Report") == $table){
		$templateVars = [
			'title' => "View Report",
			'content' => contentLoadingFunction('../../template/admin/viewReport.php', [])
		];
	}
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

	$html = contentLoadingFunction('../../template/admin/admin-layout.php', $templateVars);
	echo $html;
?>