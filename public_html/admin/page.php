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
	}else if('a'.sha1("Modules") == $table){
		$templateVars = [
			'title' => "Add Module",
			'content' => contentLoadingFunction('../../template/admin/addModuleForm.php', [])
		];
	}
	$html = contentLoadingFunction('../../template/admin/admin-layout.php', $templateVars);
	echo $html;
?>